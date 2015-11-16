<?php

require 'config/initialize.php';

$users = get($connection);

view('user/index', [
	'users' 	=> $users
]);
