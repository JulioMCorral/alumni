<?php

$config = [
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'university'
];

function connect($config) {
	$conn = new mysqli(
		$config['hostname'],
		$config['username'],
		$config['password'],
		$config['database']
	);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	return $conn;
}

function sanitizeString($var, $conn) {
	$var = strip_tags($var);
	$var = htmlentities($var);
	$var = stripslashes($var);
	return $conn->real_escape_string($var);
}

function queryDatabase($query, $conn) {
	$result = $conn->query($query);

	return $result;
}

function createTable($name, $query, $conn)
{
	queryDatabase("CREATE TABLE IF NOT EXISTS $name($query)", $conn);
	echo "Table '$name' created or already exists.<br>";
}

function get($conn) {
	return queryDatabase("SELECT * FROM user", $conn);
}

function getLastId($conn) {
	$id = queryDatabase("SELECT id FROM user ORDER BY id DESC LIMIT 1", $conn);

	if ($id->num_rows) {
		$id = $id->fetch_array(MYSQLI_ASSOC);
		$id = $id['id'];

		return $id;
	}
}

function getByID($id, $conn) {
	return queryDatabase("SELECT id, username, name FROM user WHERE id='$id'", $conn);
}

function getByUsername($username, $conn) {
	return queryDatabase("SELECT * FROM user WHERE username='$username'", $conn);
}

function registerUser($username, $fullName, $password, $conn) {
	queryDatabase("INSERT INTO user (username, name, password) VALUES ('$username', '$fullName', '$password')", $conn);
}

function authenticateUser($username, $password, $conn) {
	$user = queryDatabase("SELECT * FROM user WHERE username='$username'", $conn);

	if ($user->num_rows) {
		$user = $user->fetch_array(MYSQLI_ASSOC);
		define('RANDOMSTR', 'ELVIJS');
		$id = $user['id'];

		$password = RANDOMSTR . "$id$password";

		if (password_verify($password, $user['password'])) {
			$_SESSION['id'] = $id;
			$_SESSION['user'] = $username;
			header('Location: index.php');
		} else {
			echo "Not going to happen!";
		}
	}
}
