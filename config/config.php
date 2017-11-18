<?php

	define("DB_HOST", "");
	define("DB_USER", "");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "");

	// Create connection
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

?>