<?php
	include 'config.php';
	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$email=$_POST["email"];
	
		$sql="INSERT into students(name,email) VALUES('$name','$email')";
	
		$query=mysqli_query($conn,$sql);
		if($query==true){
			$_SESSION["message"]="Data Inserted.";		
		}
		else{
			$_SESSION["message"]="Data not inserted.";
			die("Error:".mysqli_error($conn));
		}
		header("Location:show.php");
	}
?>