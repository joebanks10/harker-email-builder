<?php

require_once ROOT_DIR . "/inc/class-wp-element.php";

class WP_Module {

    private $wp_data;
    private $data;

    private static $templates = array(
        'one-column' => array(
            'content' => array()
        ),
        'two-columns' => array(
            'content_1' => array(), 
            'content_2' => array()
        ),
        'three-columns' => array(
            'content_1' => array(), 
            'content_2' => array(), 
            'content_3' => array()
        ),
        'content-sidebar' => array(
            'content' => array(),
            'sidebar' => array()
        ),
        'grid' => array(
            'columns' => array()
        )
    );

    public function __construct($wp_data) {
        $this->wp_data = $wp_data;
        $this->data = $this->parse_wp_data();
    }

    public function get_data() {
        return $this->data;
    }

    /**
     * Gets module data from WP module data
     * @param  array  $json  Module WP JSON data
     * @return array  Module data for Twig template
     */
    private function parse_wp_data() {
        $wp_data = $this->wp_data;

        $module = array(
            'template' => $this->get_template($wp_data['acf_fc_layout']),
            'options' => $this->get_options()
        );

        return $module;
    }

    /**
     * Gets email builder template that corresponds with WP template
     * @param  string $wp_template Template name from WP
     * @return string $template    Template name for email builder
     */
    private function get_template($wp_template) {
        return isset(self::$templates[$wp_template]) ? $wp_template : 'grid';
    }

    private function get_options() {
        $wp_data = $this->wp_data;

        // get general options
        $options = \HKR\array_filter_key($wp_data, function($key) {
            return !empty($key) and $key != 'acf_fc_layout' and $key != 'columns';
        });

        // get template specific options
        $template_options = $this->get_template_options($wp_data['acf_fc_layout']);

        // merge options
        $options = array_merge($options, $template_options);

        return $options;
    }

    private function get_template_options($wp_template) {
        $wp_columns = $this->wp_data['columns'];
        $column_options = isset(self::$templates[$wp_template]) ? self::$templates[$wp_template] : array('columns' => array());
        
        $i = 0;
        foreach($column_options as $key => $option) {
            if ($key == 'columns') {
                // add to columns array
                foreach($wp_columns as $wp_column) {
                    $column_options['columns'][] = array(
                        'width' => $wp_column['width'],
                        'elements' => $this->get_elements($wp_column['elements'])
                    );
                }
                break;
            } else {
                $wp_column = $wp_columns[$i++];

                $column_options[$key] = $this->get_elements($wp_column['elements']);
            }
        }

        return $column_options;
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
