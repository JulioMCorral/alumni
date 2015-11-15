<?php

require 'config/initialize.php';

mustBeGuest();

if (isset($_POST['authForm'])) {
	$username = sanitizeString($_POST['username'], $connection);
	$password = sanitizeString($_POST['password'], $connection);

	if ($username == "" || $password == "") {
		header("location: index.php");
	} else {
		authenticateUser($username, $password, $connection);
	}
}

view('auth/auth');
