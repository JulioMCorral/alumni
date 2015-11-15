<?php

function view($path, $data = null) {
	if ($data) {
		extract($data);
	}

	$path = $path . '.view.php';

	include "views/layout.php";
}

function mustBeGuest() {
	if (isset($_SESSION['user'])) {
		header('Location: index.php');
		die();
	}
}

function mustBeAuthenticated() {
	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
		die();
	}
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
