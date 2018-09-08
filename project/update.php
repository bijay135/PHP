<?php
include 'config.php';
if(isset($_POST['submit']))
{ 

    $id = $_POST['id'];
	$name =  $_POST['name'];
	$email = $_POST['email'];
	
	$sql = "UPDATE students set name='$name', email='$email' where id='$id'";


	$query = mysqli_query($conn, $sql);

	if(!$query){
		die('Error:'. mysqli_error($conn));
	}

	// echo '<br>Successfully data inserted.<br>';
  header('Location: show.php');
}

?>