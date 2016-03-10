<?php

require_once "load.php";

$config = array(
    'email_dir' => __DIR__
);

new Email($config);
