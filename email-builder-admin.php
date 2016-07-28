<?php
namespace HKR\Email_Builder_Admin;

/*
    Plugin Name: Email Builder Admin
    Plugin URI: http://www.harker.org
    Description: Provides an admin interface for Harker's Email Builder tool
    Version: 1.0
    Author: Joe Banks
    Author URI: http://www.harker.org
*/

define('PATH', plugin_dir_path(__FILE__));
define('URL', plugin_dir_url(__FILE__));

require_once(PATH . 'inc/class-singleton.php');
require_once(PATH . 'inc/class-acf.php');
require_once(PATH . 'inc/class-email-post-type.php');

class Plugin extends \HKR\Singleton {
    
    protected function __construct($args = array()) {
        // include Advanced Custom Fields
        $acf = \HKR\ACF_Include::get_instance(array(
            'dir_path' => PATH . 'vendor/advanced-custom-fields-pro/',
            'dir_url' => URL . 'vendor/advanced-custom-fields-pro/'
        ));

        add_action('init', array($this, 'init'));

        $email = new Email_Post_Type();
    }

    public function init() {
        add_action('acf/input/admin_enqueue_scripts', array($this, 'acf_admin_styles'));
        add_action('acf/input/admin_enqueue_scripts', array($this, 'acf_admin_scripts'));
        
        add_action('acf/fields/flexible_content/layout_title/name=modules', array($this, 'module_title'), 10, 4);
        add_action('acf/fields/flexible_content/layout_title/name=elements', array($this, 'element_title'), 10, 4);

        add_filter('acf_the_content', array($this, 'the_content'), 9);
        // add_filter('acf/prepare_field/name=columns', array($this, 'prep_field'));
    }

    public function prep_field($field) {
        echo '<pre>'; print_r( $field ); echo '</pre>';

        return $field;
    }

    public function acf_admin_styles() {
        wp_enqueue_style( 'hkr_email_builder_admin_style', URL . 'assets/css/admin-style.css' );
    }
    public function acf_admin_scripts() {
        wp_enqueue_script( 'hkr_email_builder_admin_script', URL . 'assets/js/admin-script.js', array('jquery'), false, true);
    }

    public function module_title($title, $field, $layout, $i) {
        $module_title = get_sub_field('title');

        if (empty($module_title)) {
            return $title;
        }

        $layout = "<span class=\"hkr-tmpl-label hkr-tmpl-module\">$title</span>";

        $title = ($module_title) ? "<span class=\"hkr-mod-title\">$module_title</span> $layout" : "$layout";
        
        return $title;
    }

    public function element_title($title, $field, $layout, $i) {
        $text = get_sub_field('text');

        if (empty($text)) {
            return $title;
        }

        $layout = "<span class=\"hkr-tmpl-label hkr-tmpl-element\">$title</span>";
        $text = wp_trim_words(strip_tags($text), 5);
        $title = "<span class=\"hkr-element-title\">$text</span> $layout";
        
        return $title;
    }

    public function the_content($value) {
        global $post;
        
        if ($post->post_type == 'email') {
            remove_filter( 'acf_the_content', 'wpautop' );
            $value = nl2br($value);
        }

        return $value;
    }

}

Plugin::get_instance();
