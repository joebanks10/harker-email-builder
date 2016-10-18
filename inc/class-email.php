<?php

namespace HKR\Email_Builder;

use \Exception;
use \Twig_Environment;
use \Twig_Loader_Filesystem;
use \Twig_Extension_Debug;
use \Twig_SimpleFunction;
use \Twig_SimpleFilter;
use \HKR\minify_html;

class Email {

    private $id;
    private $settings;
    private $loader;
    private $twig;
    private $cache;
    private $last_modified;

    /**
     * Create and render the twig template
     * 
     * @param string $email_dir The directory of the email
     */
    public function __construct($args = array()) {

        $defaults = array(
            'email_dir' => dirname(__file__),
            'email_url' => '',
            'email_template' => 'email.html',
            'email_data' => 'email.json',
            'stylesheet_url' => ROOT_CSS_DIR_URL . '/style.css',
            'stylesheet_addons_url' => '',
            'img_dir_url' => ROOT_IMG_DIR_URL,
            'wp_api_endpoint' => WP_API_URL,
            'debug' => EMAIL_BUILDER_DEBUG
        );

        $constants = array(
            'ROOT_CSS_DIR_URL' => ROOT_CSS_DIR_URL,
            'ROOT_IMG_DIR_URL' => ROOT_IMG_DIR_URL
        );

        $this->settings = array_merge($defaults, $args);

        if ($this->settings['stylesheet_url']) {
            $this->settings['stylesheet'] = file_get_contents($this->settings['stylesheet_url']);
        }

        if ($this->settings['stylesheet_addons_url']) {
            $this->settings['stylesheet_addons'] = file_get_contents($this->settings['stylesheet_addons_url']);
        }

        if ($this->settings['debug']) {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }

        $this->id = date('Y') . '/' . basename($this->settings['email_dir']);
        $this->index = 0;

        if ( EMAIL_BUILDER_CACHE ) {
            $this->cache = $this->create_cache();
        }

        $is_inline = isset($_GET['inline']);
        $wp_id = isset($_GET['wp_id']) ? $_GET['wp_id'] : false;

        // get data from WordPress or JSON file
        if ($wp_id) {
            $wp_email = new WP_Email($this->settings['wp_api_endpoint'] . $wp_id);
            $json = $wp_email->get_data();
        } else {
            $json = $this->get_data();
        }
        
        $email_data = array_merge($this->settings, $json);
        $data = array_merge(array(
            'email' => $email_data
        ), $constants);

        $this->loader = $this->create_loader();
        $this->twig = $this->create_environment();
        $this->extend_twig($data);

        $this->render_email($is_inline, $data);
    }

    private function create_loader() {

        // create loader
        $loader = new Twig_Loader_Filesystem();

        // add template paths to loader
        $loader->setPaths(array(
            ROOT_DIR . '/templates'
        ));
        $loader->setPaths(array(
            $this->settings['email_dir']
        ), 'email');

        return $loader;
    }

    private function create_environment() {

        // create twig environment
        $twig = new Twig_Environment($this->loader, array(
            'cache' => ROOT_DIR . '/cache/twig',
            'debug' => $this->settings['debug'],
            'autoescape' => false
        ));

        if ( $this->settings['debug'] ) {
            $twig->addExtension(new Twig_Extension_Debug());
        }

        return $twig;
    }

    private function extend_twig($data = array()) {
        $template_extensions = new Template_Extensions($data);

        // general
        $this->add_function('render_file', array($template_extensions, 'render_file'));

        // grid
        $this->add_function('module_classes', array($template_extensions, 'get_module_classes'));
        $this->add_function('opposite_direction', array($template_extensions, 'get_opposite_direction'));
        $this->add_function('table_position', array($template_extensions, 'get_table_position'));
        $this->add_function('get_column_width', array($template_extensions, 'get_column_width'));
        $this->add_function('convert_elements_to_columns', array($template_extensions, 'convert_elements_to_columns'));
        $this->add_function('get_image_url', array($template_extensions, 'get_image_url'));
        
        // calendar list
        $this->add_function('ical', array($template_extensions, 'get_ical_items'));
        $this->add_function('convert_dates_to_columns', array($template_extensions, 'convert_dates_to_columns'));

        // article list
        $this->add_function('rss', array($template_extensions, 'get_rss_items'));

        $this->add_filter('merge_r', array($template_extensions, 'array_merge_recursive_distinct'));
    }

    private function add_function($name, $callback) {
        $function = new Twig_SimpleFunction($name, $callback);
        
        $this->twig->addFunction($function);
    }

    private function add_filter($name, $callback, $options = array()) {
        $filter = new Twig_SimpleFilter($name, $callback, $options);
        
        $this->twig->addFilter($filter);
    }

    private function render_email($is_inline = false, $data = array()) {
        if ( EMAIL_BUILDER_CACHE ) {
            $email = $this->get_cached_email($is_inline, $data);
        } else {
            $email = $this->get_rendered_email($is_inline, $data);
        }

        echo $email;
    }

    private function get_cached_email($is_inline = false, $data = array()) {
        if ( isset($_GET['empty_cache']) ) {
            $this->cache->deleteItem($this->id);
        }

        $cached_item_path = $this->id . '/' . $this->last_modified;
        if ($is_inline) {
            $cached_item_path .= '/inline';
        }

        $item = $this->cache->getItem($cached_item_path);
        $email = $item->get();

        if ( $item->isMiss() ) {
            $item->lock();

            $email = $this->get_rendered_email($is_inline, $data);

            $item->set($email);
            $item->expiresAfter(3600); // 1 hour

            $this->cache->deleteItem($this->id); // clear cache for email
            $this->cache->save($item);
        } 

        return $email;
    }

    private function get_rendered_email($is_inline = false, $data = array()) {
        $email_dir = $this->settings['email_dir'];
        $email_file = $this->settings['email_template'];

        if ( file_exists("$email_dir/$email_file") ) {
            $file = '@email/' . $email_file;
        } else {
            $file = 'layouts/base.html';
        }

        $email = $this->twig->render($file, $data);

        if ($is_inline) {
            $css = $this->get_styles();
            $email = $this->inline_css($email, $css);
        }

        if (isset($_GET['minify'])) {
            $email = minify_html($email);
        }

        return $email;
    }

    // UTILITY FUNCTIONS
    // ------------------------------------------

    private function inline_css($html, $css = '') {
        $inliner = new TijsVerkoyen\CssToInlineStyles\CssToInlineStyles($html, $css);
        $html_inlined = $inliner->convert();

        return $html_inlined;
    }

    private function get_styles() {
        $css = file_get_contents($this->settings['stylesheet_url']);

        if ( $this->settings['stylesheet_addons_url'] ) {
            $addons = file_get_contents($this->settings['stylesheet_addons_url']);
            $css = ( $addons ) ? $css . $addons : $css;
        }

        return $css;
    }

    private function get_data() {
        $json = array();
        $path = $this->settings['email_dir'] . '/' . $this->settings['email_data'];

        if ( file_exists($path) ) {
            $content = file_get_contents($path);
            $content = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t]//.*)|(^//.*)#", '', $content); // remove comments
            $content = preg_replace( "/\r|\n/", "", $content ); // remove new lines for json decoding

            $json = json_decode($content, true); // returns associative array

            if ( !$json ) {
                throw new Exception('Unable to parse data file at ' . $path);
            }
        } else {
            throw new Exception('Unable to find data file at ' . $path);
        }

        // set last modified time for email (used for cache)
        $this->last_modified = filemtime($path);

        return $json;
    }

    private function create_cache() {
        $driver = new Stash\Driver\FileSystem(array(
            'path' => ROOT_DIR . '/cache/email'
        ));

        return new Stash\Pool($driver);
    }

    static public function get_email_url() {
        $url_parts = explode('?', $_SERVER['REQUEST_URI']);
        $url = preg_replace('/\/$/', '', $url_parts[0]); // URL w/o arguments

        return "http://$_SERVER[HTTP_HOST]$url";
    }

}