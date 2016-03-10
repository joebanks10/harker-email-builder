<?php

// include the magic sauce
include "../../load.php";

// configure file paths here
$config = array(
    'email_dir' => dirname(__file__), // Path to email's folder
    'css_dir_url' => ROOT_URL . '/assets/css/', // URL to email's stylesheet folder
    'img_dir_url' => ROOT_URL . '/assets/img/' // URL to email's images folder
);

// render the email
new Email($config);
