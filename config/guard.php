<?php

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
