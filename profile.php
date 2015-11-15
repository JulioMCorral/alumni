<?php

require 'config/initialize.php';

mustBeAuthenticated();

$alumni = getByUsername($_GET['username'], $connection);

if ($alumni->num_rows) {
	$alumni = $alumni->fetch_array(MYSQLI_ASSOC);

	view('main/detail', [
		'alumni' => $alumni
	]);
} else {
	header('location:/');
}
