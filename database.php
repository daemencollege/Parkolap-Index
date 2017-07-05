<?php

$user = "index";
$password = "password";
$database = "index";
$host = "localhost";
$port = 3306;

$db = mysqli_init();

$success = mysqli_real_connect(
	$link,
	$host,
	$user,
	$password,
	$database,
	$port
);

print $success;

?>