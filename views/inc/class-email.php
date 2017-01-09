<?php

namespace HKR\Email_Builder;

require_once ROOT_DIR . "/inc/class-cache.php";

use \Exception;
use \Twig_Environment;
use \Twig_Loader_Filesystem;
use \Twig_Extension_Debug;
use \Twig_SimpleFunction;
use \Twig_SimpleFilter;
use \TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

class Email {

    private $id;
    private $settings;
    private $data;
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
            'email_cache' => ROOT_DIR . '/cache/emails',
            'stylesheet_url' => ROOT_CSS_DIR_URL . '/style.css',
            'stylesheet_addons_url' => '',
            'img_dir_url' => ROOT_IMG_DIR_URL,
            'wp_api_endpoint' => WP_API_URL,
            'wp_id' => isset($_GET['wp_id']) ? $_GET['wp_id'] : false,
            'debug' => isset($_GET['debug']),
            'minify' => isset($_GET['minify']),
            'download' => isset($_GET['download'])
        );

        $this->settings = array_merge($defaults, $args);

        if ($this->settings['stylesheet_url']) {
            $this->settings['stylesheet'] = file_get_contents($this->settings['stylesheet_url']);
        }

        if ($this->settings['stylesheet_addons_url']) {
            $this->settings['stylesheet_addons'] = file_get_contents($this->settings['stylesheet_addons_url']);
        }

        $this->debug = $this->settings['debug'];
        $this->minify = $this->settings['minify'];
        $this->download = $this->settings['download'];

        if ($this->settings['wp_id']) {
            $this->wp_email = new WP_Email($this->settings['wp_api_endpoint'] . $this->settings['wp_id']);
            $this->settings['email_cache'] = ROOT_DIR . '/cache/wp';
        }

        $this->cache = new Email_Cache(array('folder_path' => $this->settings['email_cache']));

        $this->render_email();
    }

    private function init_twig() {
        $this->loader = $this->create_loader();
        $this->twig = $this->create_environment();
        $this->extend_twig($this->data);
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
            'debug' => EMAIL_BUILDER_DEBUG,
            'autoescape' => false
        ));

        if ( EMAIL_BUILDER_DEBUG ) {
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

    private function render_email() {
        $email = $this->get_rendered_email();

        $this->set_header();

        echo $email;
    }

    private function get_rendered_email() {
        if ($this->debug) {
            $html = $this->get_twig_email();
        }
        else if (isset($this->wp_email)) {
            $slug = $this->wp_email->get_slug();
            $filename = "$slug.html";
            $modified = $this->wp_email->get_modified_date();

            if ($this->cache->is_invalid($filename, $modified)) {
                // render twig email
                $html = $this->get_twig_email();
                
                // inline css
                $css = $this->get_concat_styles();
                $html = $this->inline_css($html, $css);

                // cache it for later
                $this->cache->put($filename, $html, $modified);
            } else {
                $html = $this->cache->get($filename);
            }
        }
        else {
            // render twig email
            $html = $this->get_twig_email();

            // inline css
            $css = $this->get_concat_styles();
            $html = $this->inline_css($html, $css);
        }

        // minify html
        if ($this->minify) {
            $html = \HKR\minify_html($html);
        }

        return $html;
    }

    private function get_twig_email() {
        $this->data = $this->get_template_data();
        $this->init_twig();

        $email_dir = $this->settings['email_dir'];
        $email_file = $this->settings['email_template'];

        if ( file_exists("$email_dir/$email_file") ) {
            $file = '@email/' . $email_file;
        } else {
            $file = 'layouts/base.html';
        }

        return $this->twig->render($file, $this->data);
    }

    private function set_header() {
        if ($this->download) {
            $filename = '';

            if (isset($this->wp_email)) {
                $filename = $this->wp_email->get_slug() . '.html';
            } else {
                $filename = basename($this->settings['email_dir']) . '.html';
            }
            
            header('Content-Disposition:attachment; filename="' . $filename . '"');
        }
    }

    // UTILITY FUNCTIONS
    // ------------------------------------------

    private function inline_css($html, $css = '') {
        $inliner = new CssToInlineStyles($html, $css);
        $html_inlined = $inliner->convert();

        return $html_inlined;
    }

    private function get_concat_styles() {
        $css = $this->settings['stylesheet'];

        if ( isset($this->data['email']['stylesheet_addons']) ) {
            $css .= $this->data['email']['stylesheet_addons'];
        } else if (isset($this->wp_email)) {
            $css .= $this->wp_email->get_stylesheet_addons();
        }

        return $css;
    }

    private function get_template_data() {
        // get data from WordPress or JSON file
        if (isset($this->wp_email)) {
            $json = $this->wp_email->get_data();
        } else {
            $json_file = $this->settings['email_dir'] . '/' . $this->settings['email_data'];
            $json = $this->get_file_data($json_file );
        }

        $data = array_merge(
            array(
                'email' => array_merge($this->settings, $json)
            ), 
            array(
                'ROOT_CSS_DIR_URL' => ROOT_CSS_DIR_URL,
                'ROOT_IMG_DIR_URL' => ROOT_IMG_DIR_URL
            )
        );

        return $data;
    }

    private function get_file_data($filename) {
        $json = array();

        if ( file_exists($filename) ) {
            $content = file_get_contents($filename);
            $content = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t]//.*)|(^//.*)#", '', $content); // remove comments
            $content = preg_replace( "/\r|\n/", "", $content ); // remove new lines for json decoding

            $json = json_decode($content, true); // returns associative array

            if ( !$json ) {
                throw new Exception('Unable to parse data file at ' . $filename);
            }
        } else {
            throw new Exception('Unable to find data file at ' . $filename);
        }

        return $json;
    }

    static public function get_email_url() {
        $url_parts = explode('?', $_SERVER['REQUEST_URI']);
        $url = preg_replace('/\/$/', '', $url_parts[0]); // URL w/o arguments

        return "http://$_SERVER[HTTP_HOST]$url";
    }

}