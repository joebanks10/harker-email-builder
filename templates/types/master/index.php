<?php

// include the magic sauce
include "../../../load.php";

$email_path = dirname(__FILE__);
$email_url = ROOT_URL . 'emails/' . basename(__DIR__);

// configure URL paths here
$config = array(
    'email_dir' => $email_path,
    'url' => $email_url,
    'stylesheet_url' => ROOT_URL . 'assets/css/style.css', // URL to email's stylesheet
    'stylesheet_addons_url' => $email_url . '/assets/css/addons.css', // URL to email's addons stylesheet
    'img_dir_url' => ROOT_URL . 'assets/img/' // URL to email's images folder
);

// render the email
new Email($config);
