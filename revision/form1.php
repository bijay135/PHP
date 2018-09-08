<html>
<head>
<title> Form </title>
<style>
	.table{
		border:1px solid black;
	}
</style>
</head>
</body>
	<table class ="table" align="center" cellspacing = "20" cellpadding = "5">
			<form>
			<tr>
				<td> Blood Donation Registration Form </td>
			</tr>
			<tr>
				<td> Name: <input type = "text" required> </td>
			</tr>
			<tr>
				<td> Email: <input type = "mail" required>  </td>
			</tr>
			<tr>
				<td> Contact No: <input type = "number" required> </td>
			</tr>
			<tr>
				<td>
					Gender: <input type = "radio" name="gender" value="male">male 
					<input type = "radio" name="gender" value="female">female
				</td>
			</tr>
			<tr>
				<td> 
					Address: <select name="Address">
						<option value = "Ktm"> Ktm </option>
						<option value = "Bkt"> Bkt </option>
						<option value = "Ltr"> Ltr </option>
					</select> <br>
				</td>
			</tr>
			<tr>
				<td> Blood Group: <input type = "text" required> </td>
			</tr>
			<tr align="center">
				<td> <input type ="submit"> <input type="reset"> </td>
			</tr>
			</form>
	</table>
</html>