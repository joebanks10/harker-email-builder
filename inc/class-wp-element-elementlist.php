<?php

namespace HKR\Email_Builder;

class WP_Element_ElementList extends WP_Element {

    protected function filter_options($options) {
        $wp_data = $this->wp_data;

        $options['elements'] = array_map(function($wp_element) {
            $element = new WP_Element($wp_element);

            return $element->get_data();
        }, $wp_data['elements'] );

        return $options;
    }

}
