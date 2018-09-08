<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sunway';

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
	die('Database connection error: '.mysqli_connect_error());
}
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