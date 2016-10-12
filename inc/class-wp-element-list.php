<?php

namespace HKR\Email_Builder;

class WP_Element_List extends WP_Element {

    protected function filter_options($options) {
        $wp_data = $this->wp_data;

        $options['items'] = array_map(function($item) {
            return $item['text'];
        }, $wp_data['items']);

        return $options;
    }

}
