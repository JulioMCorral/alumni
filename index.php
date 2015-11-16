<?php

require 'config/initialize.php';

if (isset($_SESSION['user'])) {
  $publicPosts = getPublicPosts($connection);
  $postsForFollowers = getPostsForFollowers($connection);
  $privatePosts = getPrivatePosts($connection);
}

view('main/index', [
  'publicPosts' => $publicPosts,
  'postsForFollowers' => $postsForFollowers,
  'privatePosts' => $privatePosts
]);
