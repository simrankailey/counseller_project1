<?php
$conn = mysqli_connect('localhost','root','password','counseling_service');
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }	
?>