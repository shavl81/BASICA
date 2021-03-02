<?php

require 'rb.php';

R::setup( 'mysql:host=localhost;dbname=basica',
        'root', 'root' );

session_start();

$user_id = $_SESSION['logged_user']->id;
$user_login = $_SESSION['logged_user']->login;
$user_join_date = $_SESSION['logged_user']->join_date;
$user = R::load('users', $user_id);

?>