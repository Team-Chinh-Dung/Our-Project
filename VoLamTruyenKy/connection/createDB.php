<?php 
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	// Create database
	$sql = "CREATE DATABASE volamtruyenky";
	if ($conn->query($sql) === TRUE) {
    	echo "Database created successfully";
	} else {
    	echo "Error creating database: " . $conn->error;
	}
	$conn->close();
?>