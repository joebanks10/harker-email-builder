<?php
namespace HKR\Email_Builder_Admin;

class Theme_Post_Type {

    public function __construct() {
        add_action( 'init', array($this, 'init') );
        add_filter( 'template_redirect', array($this, 'template_redirect') );
    }

    public function init() {
        $this->register_post_type();
    }

    public function template_redirect() {
        $this->template();
    }

    private function register_post_type() {
        $labels = array(
            'name'               => _x( 'Email Themes', 'post type general name', 'hkr-email-builder-admin' ),
            'singular_name'      => _x( 'Email Theme', 'post type singular name', 'hkr-email-builder-admin' ),
            'menu_name'          => _x( 'Email Themes', 'admin menu', 'hkr-email-builder-admin' ),
            'name_admin_bar'     => _x( 'Email Theme', 'add new on admin bar', 'hkr-email-builder-admin' ),
            'add_new'            => _x( 'Add New', 'email', 'hkr-email-builder-admin' ),
            'add_new_item'       => __( 'Add New Theme', 'hkr-email-builder-admin' ),
            'new_item'           => __( 'New Theme', 'hkr-email-builder-admin' ),
            'edit_item'          => __( 'Edit Email Theme', 'hkr-email-builder-admin' ),
            'view_item'          => __( 'View Email Theme', 'hkr-email-builder-admin' ),
            'all_items'          => __( 'Themes', 'hkr-email-builder-admin' ),
            'search_items'       => __( 'Search Themes', 'hkr-email-builder-admin' ),
            'parent_item_colon'  => __( 'Parent Themes:', 'hkr-email-builder-admin' ),
            'not_found'          => __( 'No themes found.', 'hkr-email-builder-admin' ),
            'not_found_in_trash' => __( 'No themes found in Trash.', 'hkr-email-builder-admin' )
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Theme styles for emails', 'hkr-email-builder-admin' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => 'edit.php?post_type=email',
            'show_in_rest'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'theme' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-admin-customizer',
            'supports'           => array( 'title', 'author' )
        );

        register_post_type( 'email_theme', $args );
    }

    private function template() {
        global $post;

        if (is_single() && $post->post_type == 'email_theme') {
            wp_redirect( home_url("/wp-json/wp/v2/email_theme/{$post->ID}") );
            exit();
        }
    }

}
