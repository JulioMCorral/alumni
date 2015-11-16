<?php

require 'config/initialize.php';

if (isset($_SESSION['user'])) {
  $userInfo = getByUsername($_SESSION['user'], $connection)->fetch_array(MYSQLI_ASSOC);
  $publicPosts = getPublicPosts($connection);
  $pendingFollowers = getPendingFollowers($_SESSION['id'], $connection);

  $followersFollowersArray = array();

  foreach($pendingFollowers as $pendingFollower) {
    $item = getByID($pendingFollower['follower'], $connection)->fetch_array(MYSQLI_ASSOC);

    array_push($followersFollowersArray, $item);
  }

}

view('main/index', [
  'userInfo' => $userInfo,
  'publicPosts' => $publicPosts,
  'followersFollowersArray' => $followersFollowersArray
]);
