<?php
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$db   = "faculdade";
	
	$conn = new mysqli($host,$user,$pass,$db) or die($conn->error);
?>