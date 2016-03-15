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
            'email_filename' => 'layout.html',
            'stylesheet_url' => ROOT_CSS_DIR_URL . 'style.css',
            'img_dir_url' => ROOT_IMG_DIR_URL
        );

        $constants = array(
            'ROOT_CSS_DIR_URL' => ROOT_CSS_DIR_URL,
            'ROOT_IMG_DIR_URL' => ROOT_IMG_DIR_URL
        );

        $this->settings = array_merge($defaults, $args);
        $this->index = 0;

        $inline = isset($_GET['inline']);
        $data = array_merge(array(
            'email' => $this->settings
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

        $this->rendered = $this->render_email($inline, $data);

        echo $this->rendered;
    }

    private function create_loader() {

        // set template paths
        $tmpl_paths = array(
            ROOT_DIR . '/templates/layouts',
            ROOT_DIR . '/templates/modules'
        );
        $email_paths = array(
            $this->settings['email_dir']
        );

        if ( file_exists($this->settings['email_dir'] . '/modules') ) {
            $email_paths[] = $this->settings['email_dir'] . '/modules';
        }
        if ( file_exists($this->settings['email_dir'] . '/elements') ) {
            $email_paths[] = $this->settings['email_dir'] . '/elements';
        }

        // create loader
        $loader = new Twig_Loader_Filesystem();

        // add template paths to loader
        $loader->setPaths($email_paths);
        $loader->setPaths($tmpl_paths, 'tmpl');

        return $loader;
    }

    private function create_environment($debug = false) {

        // create twig environment
        $twig = new Twig_Environment($this->loader, array(
            'debug' => $debug
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

    private function render_email($inline = false, $data = array()) {

        $email_dir = $this->settings['email_dir'];
        $email_file = $this->settings['email_filename'];

        $file = (file_exists("$email_dir/$email_file")) ? $email_file : '@tmpl/base.html';

        $email = $this->twig->render($file, $data);

        if ($inline) {
            $css = $this->render_file($this->settings['stylesheet_url']);
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
        $position = '';

        if($direction == 'ltr') {
            $position = 'left';
        } else if ($direction == 'rtl') {
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

}