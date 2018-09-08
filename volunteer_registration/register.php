<html>
<head>
<title></title>
	<style>
		.table{
			border:1px solid black;
		}
	</style>
</head>
<body>
	<table class="table" cellspacing="10" cellpadding="10">
		<div class="form">
		<form method="post" action="confirm.php" enctye="multipart/form-data">
			<tr>
				<th> Volunteer Registration Form </th>
			</tr>
			<tr>
				<td>
					Full Name: <input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>
					Contact Number: <input type="number" name="number">
				</td>
			</tr>
			<tr>
				<td>
					Facebook: <input type="text" name="facebook">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Register" name="submit">
				</td>
				<td>
					<input type="reset" value="Clear Form" name="clear">
				</td>
			</tr>
		</form>
		</div>
</body>
</html>