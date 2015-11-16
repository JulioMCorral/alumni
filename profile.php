<?php

require 'config/initialize.php';

mustBeAuthenticated();

$alumni = getByUsername($_GET['username'], $connection);

if ($alumni->num_rows) {
	$alumni = $alumni->fetch_array(MYSQLI_ASSOC);

	$userPosts = getUserPosts($alumni['id'], $connection);
	$sharedPosts = getSharedPosts($alumni['id'], $connection);

	view('main/detail', [
		'alumni' => $alumni,
		'userPosts' => $userPosts,
		'sharedPosts' => $sharedPosts
	]);
} else {
	header('location:/');
}
