<?php

$servername="localhost";
	$username="root";
	$password="";
	$dbname="test1";
//Create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
	if($conn->connect_error)
		die("Failed Connection: " . $conn->connect_error);

?>