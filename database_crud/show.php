<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
		</thead>
	<tbody>
		<?php
			$server="localhost";
			$username="root";
			$password="";
			$db="sunway";
			$conn=mysqli_connect($server,$username,$password,$db);
			$sql="SELECT * FROM students";
			$query=mysqli_query($conn,$sql); 
			
			if(!$query){
				die("Error:". mysqli_error($conn));
			}
			
			if(mysqli_num_rows($query)>0) {
				while($rows = mysqli_fetch_assoc($query)){
					echo "<tr>";
					echo "<td>".$rows["id"]."</td>";
					echo "<td>".$rows["name"]."</td>";
					echo "<td>".$rows["email"]."</td>";
					echo '<td><a  href="delete.php?id='.$rows['id'].'">Delete</a> <a  href="edit.php?id='.$rows['id'].'">Edit</a>';
					echo "</tr>";
				}
			}
		?>
	</tbody>
	</table>
</body>
</html>