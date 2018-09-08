<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="result.php" method="post">
		
	<table>
		
	<tr>
		<td>Num1:</td><td><input type="number" name="num1" ></td><br>
	</tr>
	<tr>
		<td>Num2:</td><td><input type="number" name="num2" ></td><br>
	</tr>
	<tr>
		<td>Operator</td><td><select name="operator">
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>

		</select>
	</tr>
	<tr>
		<td><button type="Submit" name="submit">Submit</td><br>
	</tr>

	</table>


	</form>

</body>
</html>