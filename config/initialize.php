<?php

session_start();

require 'config/functions.php';
require 'config/database.php';

$connection = connect($config);

if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
}
