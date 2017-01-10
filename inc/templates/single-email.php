<?php

global $post;

use HKR\Email_Builder\EmailView;

new EmailView(array(
    'wp_id' => $post->ID
));
