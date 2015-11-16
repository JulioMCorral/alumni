<?php

require 'config/initialize.php';

mustBeAuthenticated();

denyRequest($_SESSION['id'], $_GET['pendingID'], $connection);

header("Location: index.php");
