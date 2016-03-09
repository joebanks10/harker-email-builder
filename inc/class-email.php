<?php

class Email {

    public $loader;
    public $twig;
    public $rendered;

    private $index;

    /**
     * Create and render the twig template
     * 
     * @param string $email_dir The directory of the email
     */
    public function __construct($args = array()) {

        $defaults = array(
            'email_dir' => dirname(__file__),
            'css_dir_url' => ROOT_URL . '/assets/css/',
            'img_dir_url' => ROOT_URL . '/assets/img/'
        );

        $this->$settings = array_merge($defaults, $args);
        $this->index = 0;

        // $ical = new ICS_Feed('http://www.harker.org/calendar/page_2302.ics');

        $template_directories = array(
            ROOT_DIR . '/templates/layouts',
            ROOT_DIR . '/templates/modules'
        );

        $email_directories = array(
            $settings['email_dir']
        );

        if ( file_exists($settings['email_dir'] . '/modules') ) {
            $email_directories[] = $settings['email_dir'] . '/modules';
        }

        // create loader and add email directories
        $this->loader = new Twig_Loader_Filesystem($email_directories);

        // add template paths and attach to 'tmpl' namespace
        $this->loader->setPaths($template_directories, 'tmpl');

        // create twig environment
        $this->twig = new Twig_Environment($this->loader, array(
            'debug' => true
        ));

        // debug
        $this->twig->addExtension(new Twig_Extension_Debug());

        // add rss feed function
        // $rss_func = new Twig_SimpleFunction('rss', array($this, 'get_rss_items') );
        // $this->twig->addFunction($rss_func);

        // add ical feed function
        // $ical_func = new Twig_SimpleFunction('ical', array($this, 'get_ics_items') );
        // $this->twig->addFunction($ical_func);

        // add classes function
        $module_classes = new Twig_SimpleFunction('module_classes', array($this, 'get_module_classes') );
        $this->twig->addFunction($module_classes);

        // add opposite direction function
        $opposite_direction = new Twig_SimpleFunction('opposite_direction', array($this, 'get_opposite_direction') );
        $this->twig->addFunction($opposite_direction);

        // add table position function
        $table_position = new Twig_SimpleFunction('table_position', array($this, 'get_table_position') );
        $this->twig->addFunction($table_position);

        // add render function
        $render_file = new Twig_SimpleFunction('render_file', array($this, 'render_file') );
        $this->twig->addFunction($render_file);

        // get data
        $data = array(
            'email' => $settings
        );

        // render template
        if ( file_exists($settings['email_dir'] . '/layout.html') ) {
            $this->rendered = $this->twig->render('layout.html', $data);
        } else {
            $this->rendered = $this->twig->render('@tmpl/base.html', $data);
        }

        file_put_contents($settings['email_dir'] . '/rendered_email.html', $this->rendered);
        echo $this->rendered;
    }

    // template functions

    public function render_file($file) {
        echo file_get_contents($file);
    }

    public function get_module_classes($other_classes = '') {
        $index = $this->get_index();
        $alt = ( $index % 2 ) ? 'odd' : 'even';

        return "module-$index $alt $other_classes";
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