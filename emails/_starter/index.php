<?php

// include the magic sauce
include "../../load.php";

$path = dirname(__FILE__);
$dir_name = basename(__DIR__);

$config = array(
    'email_dir' => $path,

    // configure URL paths here
    'stylesheet_url' => ROOT_URL . 'assets/css/style.css', // URL to email's stylesheet
    'stylesheet_addons_url' => ROOT_URL . "emails/$dir_name/assets/css/addons.css", // URL to addons stylesheet
    'img_dir_url' => ROOT_URL . 'assets/img/' // URL to email's images folder
);

// render the email
new Email($config);
