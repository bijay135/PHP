<?php
include 'config.php';
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "DELETE from students where id=$id";

	$query = mysqli_query($conn, $sql);
	if(!$query){
		die('Error:'. mysqli_error($conn));
	}
	header('Location: show.php');
}
?>