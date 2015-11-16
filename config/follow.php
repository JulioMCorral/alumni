<?php

function follow($follower, $follows, $redirect, $conn) {
	queryDatabase("INSERT INTO following (follower, follows, approved) VALUES ('$follower', '$follows', '2')", $conn);

	header("Location: profile.php?username=$redirect");
}

function unfollow($whomIsUnfollowing, $whomIsUnfollowed, $redirect, $conn) {
	queryDatabase("DELETE FROM following WHERE follower='$whomIsUnfollowing' AND follows='$whomIsUnfollowed'", $conn);

	header("Location: profile.php?username=$redirect");
}

function acceptRequest($whoIsAccepting, $whomIsAccepted, $conn) {
	queryDatabase("UPDATE following SET approved='1' WHERE follows='$whoIsAccepting' AND follower='$whomIsAccepted'", $conn);
}

function denyRequest($whoIsAccepting, $whomIsAccepted, $conn) {
	queryDatabase("UPDATE following SET approved='0' WHERE follows='$whoIsAccepting' AND follower='$whomIsAccepted'", $conn);
}

function isPending($userID, $relation, $conn) {
	return queryDatabase("SELECT * FROM following WHERE follower='$userID' AND follows='$relation'", $conn);
}

function getPendingFollowers($userID, $conn) {
	return queryDatabase("SELECT * FROM following WHERE follows='$userID' AND approved='2'", $conn);
}
