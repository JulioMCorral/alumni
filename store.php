<?php

require 'config/initialize.php';

mustBeAuthenticated();

$users = get($connection);

view('store/index', [
	'users' 	=> $users
]);
