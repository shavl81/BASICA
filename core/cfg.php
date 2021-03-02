<?php

require_once 'model.php';
require_once 'controller.php';
require 'rb.php';

R::setup( 'mysql:host=localhost;dbname=basica',
        'root', 'root' );

function pr ($s) {
	echo "<pre>"; print_r($s); echo "</pre>";
}
