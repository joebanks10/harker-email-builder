<?php

// include the magic sauce
include "../../load.php";

// configure file paths here
$config = array(
    'email_dir' => dirname(__file__),
    'css_dir_url' => ROOT_URL . '/assets/css/',
    'img_dir_url_url' => ROOT_URL . '/assets/img/'
);

// render the email
new Email($config);
