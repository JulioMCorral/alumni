<?php

require 'config/initialize.php';

mustBeAuthenticated();

acceptRequest($_SESSION['id'], $_GET['pendingID'], $connection);

header("Location: index.php");
