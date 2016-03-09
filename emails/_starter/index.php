<?php

// include the magic sauce
include "../../load.php";

// configure file paths here
$config = array(
    'email_dir' => dirname(__file__),
    'img_dir_url_url' => ROOT_URL . '/assets/img/' // replace with URL to images folder
);

// render the email
new Email($config);
