<?php

require 'config/initialize.php';

mustBeAuthenticated();

$user = getByUsername($_GET['username'], $connection);

if ($user->num_rows) {
	$user = $user->fetch_array(MYSQLI_ASSOC);
	$posts = getUserPosts($user['id'], $connection);
	$publicPosts = getUserSpecificPosts($user['id'], 2, $connection);

	$pendingStatus = isPending($_SESSION['id'], $user['id'], $connection)->fetch_array(MYSQLI_ASSOC);

	view('main/detail', [
		'user' => $user,
		'posts' => $posts,
		'publicPosts' => $publicPosts,
		'pendingStatus' => $pendingStatus
	]);
} else {
	header('location:/');
}
