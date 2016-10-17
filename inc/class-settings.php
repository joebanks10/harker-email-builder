<?php

namespace HKR\Email_Builder_Admin;

class Settings {

	function __construct() {
		acf_add_options_page(array(
	        'page_title'    => 'Email Builder Settings',
	        'menu_title'    => 'Email Builder',
	        'menu_slug'     => 'hkr-eb-settings',
	        'parent_slug'   => 'options-general.php',
	        'capability'    => 'manage_options',
	        'redirect'      => false
	    ));
	}

}