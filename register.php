<?php

require 'config/initialize.php';

mustBeGuest();

if (isset($_POST['authForm'])) {
	$username = sanitizeString($_POST['username'], $connection);
	$fullName = sanitizeString($_POST['fullName'], $connection);
	$password = sanitizeString($_POST['password'], $connection);

	if ($username == "" || $fullName == "" || $password == "" || !ctype_alnum($username)) {
		header("location: register.php");
	} else {
		$user = queryDatabase("SELECT username FROM user WHERE username='$username'", $connection);

		if ($user->num_rows) {
			header("location: register.php");
		} else {
			// constString + newUserId + password
			$newUserId = getLastId($connection)+1;
			$password = generatePassword($newUserId, $password);
			$password = password_hash($password, PASSWORD_BCRYPT);
			registerUser($username, $fullName, $password, $connection);
			header('Location: authenticate.php');
		}
	}
}

view('auth/register');
