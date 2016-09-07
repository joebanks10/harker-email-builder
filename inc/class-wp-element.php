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
            // remove empty keys and acf layout
            return !empty($key) and $key != 'acf_fc_layout'; 
        });

        $options = array_filter($options, function($val) {
            // remove empty values
            return !empty($val);
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

        switch($wp_template) {
            case 'list':
                $options['items'] = array_map(function($item) {
                    return $item['text'];
                }, $wp_data['items']);
                break;
            case 'element-list':
                $options['elements'] = $this->get_elements($wp_data['elements']);
                break;
        }

        return $options;
    }

    private function get_elements($wp_elements) {
        $wp_elements = !empty($wp_elements) ? $wp_elements : array();

        return array_map( array($this, 'get_element'), $wp_elements );
    }

    private function get_element($wp_element) {
        $element = new WP_Element($wp_element);

        return $element->get_data();
    }

}
