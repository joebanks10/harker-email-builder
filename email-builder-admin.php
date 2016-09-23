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

require_once(PATH . "vendor/autoload.php");

require_once(PATH . 'inc/class-singleton.php');
require_once(PATH . 'inc/class-acf.php');
require_once(PATH . 'inc/class-email-post-type.php');
require_once(PATH . 'inc/class-banner-post-type.php');
require_once(PATH . 'inc/class-theme-post-type.php');

class Plugin extends \HKR\Singleton {
    
    protected function __construct($args = array()) {
        // include Advanced Custom Fields
        $acf = \HKR\ACF_Include::get_instance(array(
            'dir_path' => PATH . 'vendor/advanced-custom-fields-pro/',
            'dir_url' => URL . 'vendor/advanced-custom-fields-pro/'
        ));

        add_action('init', array($this, 'init'));

        $email = new Email_Post_Type();
        $theme = new Theme_Post_Type();
        $banner = new Banner_Post_Type();
    }

    public function init() {
        add_action('acf/input/admin_enqueue_scripts', array($this, 'acf_admin_styles'));
        add_action('acf/input/admin_enqueue_scripts', array($this, 'acf_admin_scripts'));
        
        add_action('acf/fields/flexible_content/layout_title/name=modules', array($this, 'module_title'), 10, 4);
        add_action('acf/fields/flexible_content/layout_title/name=elements', array($this, 'element_title'), 10, 4);

        add_filter('acf_the_content', array($this, 'the_content'), 9);

        add_action('acf/render_field/type=repeater', array($this, 'ajax_loading_img'), 9, 1);

        add_filter('acf/prepare_field/key=field_57a4cc7bfc202', array($this, 'readonly_field')); // ical event id
        add_filter('acf/prepare_field/key=field_57a4cd19fc205', array($this, 'readonly_field')); // ical event permalink

        add_filter('acf/format_value/type=date_picker', array($this, 'strtotime'));
        add_filter('acf/format_value/type=date_time_picker', array($this, 'strtotime'));

        add_filter('acf/format_value/type=post_object', array($this, 'add_acf_fields'), 10, 3);

        add_action('wp_ajax_get_ical_events', array($this, 'ajax_get_ical_events'));
        add_action('wp_ajax_nopriv_get_ical_events', array($this, 'ajax_get_ical_events'));
    }

    public function acf_admin_styles() {
        wp_enqueue_style( 'hkr_email_builder_admin_style', URL . 'assets/css/admin-style.css' );
    }
    public function acf_admin_scripts() {
        // wp_enqueue_script( 'dateformat', URL . 'assets/js/dateformat.js', array(), false, true);
        wp_enqueue_script( 'hkr_email_builder_admin_script', URL . 'assets/js/admin-script.js', array('jquery', 'dateformat'), false, true);
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

    public function readonly_field($field) {
        $field['readonly'] = true;

        return $field;
    }

    public function strtotime($value) {
        if ( is_string($value) ) {
            // set default timezone
            date_default_timezone_set('America/Los_Angeles');

            $value = strtotime($value);
        }

        return $value;
    }

    public function add_acf_fields($post_object, $post_id, $field) {
        if (!$post_object) {
            return $post_object;
        } 

        $transient_name = "hkr_email_{$post_id}_{$field['name']}_acf";

        $fields = get_transient($transient_name);

        // check if cached fields exist and if banner ids match and if modified dates match
        if (!$fields || $post_object->ID != $fields['post_id'] || $post_object->post_modified != $fields['post_modified']) {
            $fields = get_fields($post_object->ID);

            if (empty($fields)) {
                return $post_object;
            }

            // set meta to check for changes in data
            $fields['post_id'] = $post_object->ID;
            $fields['post_modified'] = $post_object->post_modified;

            // cache for later
            set_transient($transient_name, $fields);
        }

        // add acf to post object fields
        $post_object->acf = $fields; 

        return $post_object;
    }

    function ajax_loading_img($field) {
        if ($field['_name'] == 'events') {
            echo '<p><img class="events-loading-img" alt="loading events..." src="' . home_url('/wp-admin/images/loading.gif') . '" /></p>';
        }
    }

    public function ajax_get_ical_events() {
        require_once(PATH . 'inc/class-ics-feed.php');

        $args = wp_parse_args( $_POST, array(
            'url' => 'http://www.harker.org/calendar/page_3624.ics',
            'start' => time(),
            'end' => time() + (7*24*60*60)
        ));

        $feed = new \HKR\ICS_Feed($args['url'], $args['start'], $args['end']);
        $events = array(
            'events' => $feed->get_events()
        );

        header('Content-Type: application/json');

        echo json_encode($events);

        wp_die();
    }

}

Plugin::get_instance();
