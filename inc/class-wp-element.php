<?php

class WP_Element {
    
    private $wp_data;
    private $data;
    private $classes = array();

    // array(
    //     'list' => 'WP_List_Element',
    //     'element-list' => 'WP_Element_List_Element'
    // );

    public function __construct($wp_data) {
        $this->wp_data = $wp_data;
        $this->data = $this->parse_wp_data();
    }

    public function get_data() {
        return $this->data;
    }

    private function parse_wp_data() {
        $wp_data = $this->wp_data;
        $template = $this->get_template();
        $child_class = isset($this->classes[$template]) ? $this->classes[$template] : null;

        if ($child_class && get_class($this) === 'WP_Element') {
            // create instance of child class for template and get data
            $reflection = new ReflectionClass($child_class);
            $instance = $reflection->newInstance($this->wp_data);
            
            $element = $instance->get_data();
        } else {
            $element = array(
                'template' => $this->get_template(),
                'options' => $this->get_options()
            );
        }

        return $element;
    }

    protected function get_template() {
        return isset($this->wp_data['acf_fc_layout']) ? $this->wp_data['acf_fc_layout'] : null;
    }

    protected function get_options() {
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
        $template_options = $this->get_template_options();

        // merge options
        $options = array_merge($options, $template_options);

        return $options;
    }

    protected function get_template_options() {
        $options = array();
        $wp_data = $this->wp_data;
        $wp_template = $wp_data['acf_fc_layout'];

        switch($wp_template) {
            case 'list':
                $options['items'] = array_map(function($item) {
                    return $item['text'];
                }, $wp_data['items']);
                break;
            case 'element-list':
                $options['elements'] = array_map(function($element) {
                    return new WP_Element($wp_element);
                }, $wp_data['elements'] );
                break;
        }

        return $options;
    }

}
