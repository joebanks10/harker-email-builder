<?php

// debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// constants
define('ROOT_DIR', dirname(__file__));

if ( $_SERVER['SERVER_NAME'] == 'localhost' ) {
    define('ROOT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/email-builder');
} else if ( $_SERVER['SERVER_NAME'] == 'skylark.harker.org' ) {
    if ( preg_match('/staging/', $_SERVER['REQUEST_URI']) ) {
        define('ROOT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/email-builder/staging');
    } else {
        define('ROOT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/email-builder/v2');
    }
    
}

define('ROOT_CSS_DIR_URL', ROOT_URL . '/assets/css');
define('ROOT_IMG_DIR_URL', ROOT_URL . '/assets/img');

// include third-party dependencies
require_once ROOT_DIR . "/vendor/autoload.php";

// include author files
require_once ROOT_DIR . "/inc/class-rss-feed.php";
require_once ROOT_DIR . "/inc/class-ics-feed.php";
require_once ROOT_DIR . "/inc/class-template-extensions.php";
require_once ROOT_DIR . "/inc/class-email.php";
