<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'config.php';
$id=$_GET['id'];
$sql="SELECT * FROM students WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);



?>
<form action='update.php' method="post" enctype="maltipart/form-data">
		<label>Name:<input type="text" name=" name" required placeholder="<?php echo $row['name'];?>"></label><br>

		<label>Email:<input type="email" name="email" required placeholder="<?php echo $row['email'];?>"></label><br>
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<input type="submit" value="submit" name="submit">
	</form>
</body>

</html>