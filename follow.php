<?php

require 'config/initialize.php';

mustBeAuthenticated();

follow($_SESSION['id'], $_GET['follow'], $_GET['username'], $connection);
