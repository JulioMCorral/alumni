<?php

require 'config/initialize.php';

$alumnis = get($connection);

view('alumni/index', [
	'alumnis' 	=> $alumnis
]);
