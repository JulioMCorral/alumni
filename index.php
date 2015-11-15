<?php

require 'config/initialize.php';

if (isset($_SESSION['user'])) {
  $posts = getPublicPosts($connection);
}

view('main/index', [
  'posts' => $posts
]);
