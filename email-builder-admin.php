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

        $email = new Email_Post_Type();

        // Create email post type
        //      Create email post type form
        // Render JSON data
    }

}

Plugin::get_instance();
