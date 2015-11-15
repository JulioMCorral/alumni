<?php

require 'config/initialize.php';

mustBeAuthenticated();

if (isset($_POST['post'])) {
  $message = sanitizeString($_POST['message'], $connection);
  $visible = sanitizeString($_POST['visible'], $connection);

  if ($message != "") {
    $authorID = getByUsername($_SESSION['user'], $connection)->fetch_array(MYSQLI_ASSOC)[id];
    post($authorID, $message, $visible, $connection);

    header('Location: index.php');
  } else {
    header('Location: index.php');
  }
}

view('post/index');
