<?php

class Email {

    private $settings;
    private $index;

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

        // Add template functions
        // $this->add_function('rss', array($this, 'get_rss_items'));
        // $this->add_function('ical', array($this, 'get_ics_items'));
        $this->add_function('module_classes', array($this, 'get_module_classes'));
        $this->add_function('opposite_direction', array($this, 'get_opposite_direction'));
        $this->add_function('table_position', array($this, 'get_table_position'));
        $this->add_function('render_file', array($this, 'render_file'));
        $this->add_function('get_column_width', array($this, 'get_column_width'));

        $this->rendered = $this->render_email($is_inline, $data);

        echo $this->rendered;
    }

    private function create_loader() {

        // create loader
        $loader = new Twig_Loader_Filesystem();

        // add template paths to loader
        $loader->setPaths(array(
            ROOT_DIR . '/templates/elements',
            ROOT_DIR . '/templates/modules',
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
            'debug' => $debug,
            'autoescape' => false
        ));

        if ( $debug ) {
            $twig->addExtension(new Twig_Extension_Debug());
        }

        return $twig;
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
        $css = $this->render_file($this->settings['stylesheet_url']);

        if ( $this->settings['stylesheet_addons_url'] ) {
            $addons = $this->render_file($this->settings['stylesheet_addons_url']);
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
        $url = $url_parts[0]; // URL w/o arguments

        return "http://$_SERVER[HTTP_HOST]$url";
    }

    // TEMPLATE FUNCTIONS
    // ------------------------------------------

    public function render_file($file) {
        return file_get_contents($file);
    }

    public function get_module_classes($other_classes = '') {
        $index = $this->get_index();
        $alt = ( $index % 2 ) ? 'odd' : 'even';

        return "module-$index $other_classes";
    }

    public function get_opposite_direction($direction) {
        $opposite = '';

        if($direction == 'left') {
            $opposite = 'right';
        } else if ($direction == 'right') {
            $opposite = 'left';
        }

        return $opposite;
    }

    public function get_table_position($direction) {
        $position = 'left'; // default

        if ($direction == 'rtl') {
            $position = 'right';
        }

        return $position;
    }

    private function get_index($increment = true) {
        $index = ($increment) ? $this->index++ : $this->index;

        return $index;
    }

    public function get_rss_items($url = '') {
        $url = empty($url) ? 'http://rss.cnn.com/rss/cnn_topstories.rss' : $url;

        $feed = new RSS_Feed($url);
        $feed = $feed->get_array();

        if ( ! $feed ) {
            return array();
        }

        return $feed['items'];
    }

    public function get_ics_items($url = '', $page_id) {
        $url = empty($url) ? 'http://www.harker.org/calendar/page_2302.ics' : $url;

        $feed = new ICS_Feed($url, $page_id);
        $feed = $feed->get_array();

        if ( ! $feed ) {
            return array();
        }

        return $feed;
    }

    public function get_column_width($column, $module) {
        $container_width = $module['width'] - (($module['column_count'] - 1) * $module['gutter_width']);
        $column_width = ""; // default
        $column_reduction = 1; // reduce width for Outlook 07/10/11

        if ( !isset($column['width']) ) {
            // if there is no column width defined
            if ($module['column_count'] == 1) {
                $column_width = "100%";
            } else {
                $column_width = floor($container_width / $module['column_count']) - $column_reduction;
            }
        } else if ( isset($column['width']) && is_numeric($column['width']) && $column['width'] >= 0 && $column['width'] <= $container_width ) {
            // if column width is a valid pixel number
            $column_width = $column['width'];
        } else if ( isset($column['width']) && preg_match('/%/', $column['width']) ) {
            // if column width is a percentage
            $column_width = floor((intval($column['width'])/100) * $container_width) - $column_reduction;
        }

        return $column_width;
    }

}