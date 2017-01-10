<?php

global $post;

use HKR\Email_Builder\EmailView;

new EmailView(array(
    'stylesheet_url' => URL . '/views/assets/css/style.css',
    'img_dir_url' => URL . '/views/assets/img',
    'wp_api_endpoint' => get_site_url(null, '/wp-json/wp/v2/email/'),
    'wp_id' => $post->ID
));
