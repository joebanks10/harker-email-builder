<?php
namespace HKR\Email_Builder_Admin;

use HKR\Email_Builder\EmailView;

class Email_Post_Type {

    public function __construct($args = array()) {
        $defaults = array(
            'template_url' => ''
        );

        $this->args = wp_parse_args($args, $defaults);

        add_action( 'init', array($this, 'init') );
        add_filter( 'template_redirect', array($this, 'template_redirect') );
    }

    public function init() {
        $this->register_post_type();
    }

    public function template_redirect() {
        $this->email_template();
    }

    private function register_post_type() {
        $labels = array(
            'name'               => _x( 'Emails', 'post type general name', 'hkr-email-builder-admin' ),
            'singular_name'      => _x( 'Email', 'post type singular name', 'hkr-email-builder-admin' ),
            'menu_name'          => _x( 'Emails', 'admin menu', 'hkr-email-builder-admin' ),
            'name_admin_bar'     => _x( 'Email', 'add new on admin bar', 'hkr-email-builder-admin' ),
            'add_new'            => _x( 'Add New', 'email', 'hkr-email-builder-admin' ),
            'add_new_item'       => __( 'Add New Email', 'hkr-email-builder-admin' ),
            'new_item'           => __( 'New Email', 'hkr-email-builder-admin' ),
            'edit_item'          => __( 'Edit Email', 'hkr-email-builder-admin' ),
            'view_item'          => __( 'View Email', 'hkr-email-builder-admin' ),
            'all_items'          => __( 'All Emails', 'hkr-email-builder-admin' ),
            'search_items'       => __( 'Search Emails', 'hkr-email-builder-admin' ),
            'parent_item_colon'  => __( 'Parent Emails:', 'hkr-email-builder-admin' ),
            'not_found'          => __( 'No emails found.', 'hkr-email-builder-admin' ),
            'not_found_in_trash' => __( 'No emails found in Trash.', 'hkr-email-builder-admin' )
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'HTML emails for The Harker School', 'hkr-email-builder-admin' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'email' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-email-alt',
            'taxonomies'         => array( 'category', 'post_tag' ),
            'supports'           => array( 'title', 'author' )
        );

        register_post_type( 'email', $args );
    }

    private function email_template() {
        global $post;

        if (is_single() && $post->post_type == 'email') {
            new EmailView(array(
                'wp_id' => $post->ID
            ));

            exit();
        }
    }

}
