<?php

require 'config/initialize.php';

mustBeAuthenticated();

unfollow($_SESSION['id'], $_GET['unfollow'], $_GET['username'], $connection);
