<?php

session_start();

require 'config/functions.php';
require 'config/guard.php';
require 'config/database.php';
require 'config/post.php';
require 'config/follow.php';

$connection = connect($config);

if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
}
