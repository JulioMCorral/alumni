<?php

function view($path, $data = null) {
	if ($data) {
		extract($data);
	}

	$path = $path . '.view.php';

	include "views/layout.php";
}

function sanitizeString($var, $conn) {
	$var = strip_tags($var);
	$var = htmlentities($var);
	$var = stripslashes($var);
	return $conn->real_escape_string($var);
}

function destroySession() {
	$_SESSION=array();

	if (session_id() != "" || isset($_COOKIE[session_name()]))
		setcookie(session_name(), '', time()-2592000, '/');

	session_destroy();
}

function generatePassword($newUserId, $password) {
	define('RANDOMSTR', 'ELVIJS');
	return RANDOMSTR . "$newUserId$password";
}
