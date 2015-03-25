<?php
$dbc =
mysqli_connect('name' 'email' 'password' 'country' 'password');
OR die(mysqli_connect_error() );
mysqli_set_charset($dbc, 'utf-8');
?>