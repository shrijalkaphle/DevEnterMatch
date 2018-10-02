<?php
	$server = 'localhost';
	$user = 'root';
	$pwd = '';
	$db = 'asianhackathon';

	$conn = new mysqli($server, $user, $pwd, $db);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
?>