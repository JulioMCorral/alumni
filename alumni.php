<?php

require 'config/initialize.php';

mustBeAuthenticated();

$alumnis = get($connection);

view('alumni/index', [
	'alumnis' 	=> $alumnis
]);
