<?php

class WP_Element {
    
    private $wp_data;
    private $data;

    public function __construct($wp_data) {
        $this->wp_data = $wp_data;
        $this->data = $this->parse_wp_data();
    }

    public function get_data() {
        return $this->data;
    }

    private function parse_wp_data() {
        $wp_data = $this->wp_data;

        $element = array(
            'template' => $wp_data['acf_fc_layout'],
            'options' => $this->get_options()
        );

        return $element;
    }

    private function get_options() {
        $wp_data = $this->wp_data;

        $options = \HKR\array_filter_key($wp_data, function($key) {
            return !empty($key) and $key != 'acf_fc_layout';
        });

        return $options;
    }

}
