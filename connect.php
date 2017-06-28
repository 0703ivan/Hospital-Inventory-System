<?php
	$host='localhost';
	$user='calvin';
	$pass='@donI0703626121';
	$db='inventory';

	// Create connection
$con = new mysqli($host, $user, $pass, $db);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>