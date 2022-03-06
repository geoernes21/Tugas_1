<?php
	$conn = new mysqli("localhost","root","","1");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>