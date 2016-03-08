<?php

// debug
ini_set('display_errors', 1);
error_reporting(E_ALL);

// constants
define('ROOT_DIR', dirname(__file__));
define('ROOT_URL', 'http://localhost/email-builder');

// include third-party dependencies
require_once ROOT_DIR . "/vendor/autoload.php";

// include author files
require_once ROOT_DIR . "/inc/class-email.php";
require_once ROOT_DIR . "/inc/class-rss-feed.php";
require_once ROOT_DIR . "/inc/class-ics-feed.php";
