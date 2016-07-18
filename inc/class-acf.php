<?php
namespace HKR;

class ACF_Include extends Singleton {

    private $args;
    
    protected function __construct($args = array()) {
        $defaults = array(
            'dir_path' => plugin_dir_path(__FILE__),
            'dir_url' => plugin_dir_url(__FILE__),
        );

        $this->args = wp_parse_args($args, $defaults);

        // customize ACF path
        add_filter('acf/settings/path', array($this, 'settings_path'));

        // customize ACF dir
        add_filter('acf/settings/dir', array($this, 'settings_dir'));

        // hide ACF field group menu item
        // add_filter('acf/settings/show_admin', '__return_false');

        // include ACF
        include_once( $this->args['dir_path'] . 'acf.php' );
    }

    public function settings_path( $path ) {
        return $this->args['dir_path'];
    }

    public function settings_dir( $dir ) {
        return $this->args['dir_url'];
    }

    public function get_option($option) {
        if ( ! function_exists('get_field') ) {
            return false;
        }

        return get_field($option, 'option');
    }

}
