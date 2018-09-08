<?php
	session_start();

	$server="localhost";
	$username="root";
	$password="";
	$dbname="sunway";

	$conn=mysqli_connect($server,$username,$password,$dbname);

	if(!$conn){
		die("Database Connection Error:".mysqli_connect_error());
	}
?>