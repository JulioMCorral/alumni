<?php

require 'config/initialize.php';

if (isset($_SESSION['user'])) {
  $publicPosts = getPublicPosts($connection);
  $pendingFollowers = getPendingFollowers($_SESSION['id'], $connection);

  $followersFollowersArray = array();

  foreach($pendingFollowers as $pendingFollower) {
    $item = getByID($pendingFollower['follower'], $connection)->fetch_array(MYSQLI_ASSOC);

    array_push($followersFollowersArray, $item);
  }

}

view('main/index', [
  'publicPosts' => $publicPosts,
  'followersFollowersArray' => $followersFollowersArray
]);
