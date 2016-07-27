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

        // get template specific options
        $template_options = $this->get_template_options($wp_data['acf_fc_layout']);

        // merge options
        $options = array_merge($options, $template_options);

        return $options;
    }

    private function get_template_options($wp_template) {
        $options = array();
        $wp_data = $this->wp_data;

        if ($wp_template == 'list') {
            $options['items'] = array_map(function($item) {
                return $item['text'];
            }, $wp_data['items']);
        }

        return $options;
    }

}
