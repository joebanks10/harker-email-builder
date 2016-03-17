<?php

// include the magic sauce
include "../../../load.php";

$dir_name = basename(__DIR__);

// configure URL paths here
$config = array(
    'email_dir' => dirname(__FILE__),
    'stylesheet_url' => ROOT_URL . 'assets/css/style.css', // URL to email's stylesheet
    'stylesheet_addons_url' => ROOT_URL . "emails/$dir_name/assets/css/addons.css", // URL to email's addons stylesheet
    'img_dir_url' => ROOT_URL . 'assets/img/' // URL to email's images folder
);

// render the email
new Email($config);
