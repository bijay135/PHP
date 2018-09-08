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

	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$number=$_POST["number"];
		$facebook=$_POST["facebook"];
	
		$sql="INSERT into vol_registration(Full_Name,Contact,Facebook) VALUES('$name','$number','$facebook')";
	
		$query=mysqli_query($conn,$sql);
		if($query){
			echo "Data Inserted.";		
		}
		else{
			echo "Data not inserted.";
			die("Error:".mysqli_error($conn));
		}
	}
?>