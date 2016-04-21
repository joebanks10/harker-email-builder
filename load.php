<?php

// debug
ini_set('display_errors', 1);
error_reporting(E_ALL);

// constants
define('ROOT_DIR', dirname(__file__));

if ( $_SERVER['SERVER_NAME'] == 'localhost' ) {
    define('ROOT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/email-builder');
} else if ( $_SERVER['SERVER_NAME'] == 'skylark.harker.org' ) {
    define('ROOT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/email-builder/staging');
}

define('ROOT_CSS_DIR_URL', ROOT_URL . '/assets/css');
define('ROOT_IMG_DIR_URL', ROOT_URL . '/assets/img');

// include third-party dependencies
require_once ROOT_DIR . "/vendor/autoload.php";

// include author files
require_once ROOT_DIR . "/inc/class-rss-feed.php";
require_once ROOT_DIR . "/inc/class-ics-feed.php";
require_once ROOT_DIR . "/inc/class-email.php";
