<?php

// include the magic sauce
include "../../load.php";

$config = array(
    'email_dir' => dirname(__file__),

    // configure URL paths here
    'stylesheet_url' => ROOT_URL . '/assets/css/style.css', // URL to email's stylesheet
    'img_dir_url' => ROOT_URL . '/assets/img/' // URL to email's images folder
);

// render the email
new Email($config);
