<?php

require 'config/initialize.php';

if (isset($_SESSION['user'])) {
	destroySession();
	header('Location: index.php');
} else {
	header('Location: index.php');
}
