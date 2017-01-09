<?php

namespace HKR\Email_Builder;

class EmailView {
    public function __construct($config) {
        require_once "load.php";

        $defaults = array( 'email_dir' => __DIR__ );
        $config = array_merge($defaults, $config);

        new Email($config);
    }
}
