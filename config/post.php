<?php

function post($author, $message, $visible, $conn) {
	queryDatabase("INSERT INTO post (author, message, visible) VALUES ('$author', '$message', '$visible')", $conn);
}

function getPosts($conn) {
	return queryDatabase("SELECT * FROM post", $conn);
}

function getPublicPosts($conn) {
	return queryDatabase("SELECT * FROM post WHERE visible='2' ORDER BY id DESC", $conn);
}

function getUserPosts($userID, $conn) {
	return queryDatabase("SELECT * FROM post WHERE author='$userID' ORDER BY id DESC", $conn);
}

function getUserSpecificPosts($userID, $option, $conn) {
	return queryDatabase("SELECT * FROM post WHERE author='$userID' AND visible='$option' ORDER BY id DESC", $conn);
}

function getUserPostsRange($userID, $from, $to, $conn) {
	return queryDatabase("SELECT * FROM post WHERE author='$userID' AND visible BETWEEN '$from' AND '$to' ORDER BY id DESC", $conn);
}

function getPublicPostsWithAuthors($conn) {
	return queryDatabase("SELECT * FROM post LEFT JOIN user ON post.author = user.id WHERE post.visible='2'", $conn);
}
