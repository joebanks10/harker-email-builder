<?php

class WP_Element {
    
    protected $wp_data;
    protected $data;
    protected $template_classes = array(
        'list' => 'WP_Element_List',
        'element-list' => 'WP_Element_ElementList'
    );

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
        $child_class = isset($this->template_classes[$template]) ? $this->template_classes[$template] : null;

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

    private function get_template() {
        $template = isset($this->wp_data['acf_fc_layout']) ? $this->wp_data['acf_fc_layout'] : null;

        return $this->filter_template($template);
    }

    private function get_options() {
        $wp_data = $this->wp_data;

        // remove layout and empty keys
        $options = \HKR\array_filter_key($wp_data, function($key) {
            return !empty($key) and $key != 'acf_fc_layout'; 
        });

        // remove empty values
        $options = array_filter($options, function($val) {
            return !empty($val);
        });

        return $this->filter_options($options);
    }

    protected function filter_template($template) {
        // to be modified by child classes
        return $template;
    }

    protected function filter_options($options) {
        // to be modified by child classes
        return $options;
    }

}

// load child elements
require_once ROOT_DIR . "/inc/class-wp-element-list.php";
require_once ROOT_DIR . "/inc/class-wp-element-elementlist.php";
