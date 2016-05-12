<?php

class Email {

    private $settings;
    private $loader;
    private $twig;
    private $rendered;

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
            'img_dir_url' => ROOT_IMG_DIR_URL
        );

        $constants = array(
            'ROOT_CSS_DIR_URL' => ROOT_CSS_DIR_URL,
            'ROOT_IMG_DIR_URL' => ROOT_IMG_DIR_URL
        );

        $this->settings = array_merge($defaults, $args);
        $this->index = 0;

        $is_inline = isset($_GET['inline']);
        
        $email_data = array_merge($this->settings, $this->get_data());
        $data = array_merge(array(
            'email' => $email_data
        ), $constants);

        $this->loader = $this->create_loader();
        $this->twig = $this->create_environment();
        $this->extend_twig($data);

        $this->rendered = $this->render_email($is_inline, $data);
        echo $this->rendered;
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

    private function create_environment($debug = false) {

        // create twig environment
        $twig = new Twig_Environment($this->loader, array(
            'cache' => ROOT_DIR . '/cache/twig',
            'debug' => $debug,
            'autoescape' => false
        ));

        if ( $debug ) {
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
        $this->add_function('rss', array($this, 'get_rss_items'));
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
        $email_data = $this->settings['email_data'];

        if ( file_exists($this->settings['email_dir'] . '/' . $email_data) ) {
            $content = file_get_contents($this->settings['email_dir'] . '/' . $email_data);
            $content = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t]//.*)|(^//.*)#", '', $content); // remove comments
            $content = preg_replace( "/\r|\n/", "", $content ); // remove new lines for json decoding

            $json = json_decode($content, true); // returns associative array
        }

        return $json;
    }

    static public function get_email_url() {
        $url_parts = explode('?', $_SERVER['REQUEST_URI']);
        $url = preg_replace('/\/$/', '', $url_parts[0]); // URL w/o arguments

        return "http://$_SERVER[HTTP_HOST]$url";
    }

}