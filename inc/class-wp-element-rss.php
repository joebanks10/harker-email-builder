<?php

class WP_Element_RSS extends WP_Element {

    protected function filter_template($template) {
        $wp_data = $this->wp_data;

        if (empty($wp_data['layout'])) {
            throw new Exception('Layout for RSS element is undefined.');
        }

        if ($wp_data['layout'] === 'article-list' || $wp_data['layout'] === 'article-grid') {
            $template = $wp_data['layout'];
        } else {
            throw new Exception('Layout (' . $wp_data['layout'] . ') for RSS element is not recognized.');
        }

        return $template;
    }

    protected function filter_options($options) {
        $wp_data = $this->wp_data;

        $options['article'] = $this->get_article_options($wp_data['article']);
        $options['feature_article'] = $this->get_article_options($wp_data['feature_article']);

        return $options;
    }

    protected function get_article_options($wp_article) {
        $article = array();
        $includes = array('img', 'header', 'content', 'button');

        if (empty($wp_article['includes'])) {
            return array();
        }

        foreach($includes as $element) {
            $options = array();
            $options['include'] = in_array($element, $wp_article['includes']);

            if ($options['include']) {

                switch($element) {
                    case 'img':
                        $options['link'] = $wp_article['link_img'];
                        break;
                    case 'header':
                        $options['link'] = $wp_article['link_header'];
                        break;
                    case 'button':
                        $options['type'] = $wp_article['button_type'];
                        $options['text'] = $wp_article['button_text'];
                        $options['width'] = $wp_article['button_width'];
                        break;
                }
                
            }

            $article[$element] = $options;
        }

        return $article;
    }

}
