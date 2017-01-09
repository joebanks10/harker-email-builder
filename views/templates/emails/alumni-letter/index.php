<?php

use HKR\Email_Builder\Email;

// include the magic sauce
include "../../../load.php";

$email_path = dirname(__FILE__);
$email_url = Email::get_email_url();

// configure URL paths here
$config = array(
    'email_dir' => $email_path,
    'stylesheet_addons_url' => $email_url . '/assets/css/addons.css', // URL to email's addons stylesheet
    'img_dir_url' => $email_url . '/assets/img/' // URL to email's images folder
);

// render the email
new Email($config);
