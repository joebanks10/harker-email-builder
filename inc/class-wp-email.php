<?php

namespace HKR\Email_Builder;

require_once ROOT_DIR . "/inc/class-wp-module.php";

class WP_Email {

    private $wp_url;
    private $wp_data;
    private $data;
    private $slug;
    private $modified;

    public function __construct($wp_url) {
        $this->wp_url = $wp_url;
        $this->wp_data = $this->fetch_wp_data($this->wp_url);
        $this->modified = strtotime($this->wp_data['modified']);
        $this->slug = $this->wp_data['slug'];
        $this->data = array();
    }

    public function get_data() {
        if (empty($this->data)) {
            $this->data = $this->parse_wp_data($this->wp_data);
        }

        return $this->data;
    }

    public function get_modified_date() {
        return $this->modified;
    }

    public function get_slug() {
        return $this->slug;
    }

    /**
     * Returns email data from WordPress
     * @return  array  $data
     */
    private function fetch_wp_data($url) {
        // get data from WP
        $json = json_decode(file_get_contents($url), true);

        if ( !$json ) {
            throw new Exception('Unable to get WP JSON data at ' . $url);
        }

        return $json;
    }

    /**
     * Gets data from WP JSON data and maps it to data object for Twig
     * @param  array  $data WordPress data
     * @return array Formatted data that can be passed into Twig template
     */
    private function parse_wp_data($wp_data = array()) {
        $data['title'] = $wp_data['title']['rendered'];

        if ($theme = $wp_data['acf']['theme']) {
            $data['stylesheet_addons'] = $theme['acf']['custom_css'];
        }

        if ($header = $wp_data['acf']['header']) {
            $data['header'] = $this->get_modules( $header['acf']['content']['modules'] );
        }

        $data['content'] = $this->get_modules( $wp_data['acf']['content']['modules'] );

        if ($footer = $wp_data['acf']['footer']) {
            $data['footer'] = $this->get_modules( $footer['acf']['content']['modules'] );
        }

        return $data;
    }

    private function get_modules($wp_modules) {
        return array_map( array($this, 'get_module'), $wp_modules );
    }

    /**
     * Get module data from WP JSON data
     * @param  array $wp_module WP JSON data for a module
     * @return array            The parsed data ready to put into Twig
     */
    private function get_module($wp_module) {
        $module = new WP_Module($wp_module);

        return $module->get_data();
    }

}
