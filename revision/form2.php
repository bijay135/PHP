<html>
<head>
<title> Form </title>
	<style>
		.table{
			border:1px solid black;
		}
		.error{
			color:red;
		}
	</style>
</head>
</body>
	<form>
		<table class ="table" align="center" cellspacing = "20" cellpadding = "5">
			<tr align = "center">
				<td> Registration Form </td>
			</tr>
			<tr class="error">
				<td> Required * </td>
			</tr>
			<tr>
				<td> Name: <input type = "mail" required>  </td>
			</tr>
			<tr>
				<td> Email: <input type = "mail" required>  </td>
			</tr>
			<tr>
				<td>
					Gender: <input type = "text" required> </td>
				</td>
			</tr>
			<tr>
				<td> Message: <textarea name = "description" required> 
				</td>
			</tr>
			<tr>
				<td> <input type ="submit"> </td>
			</tr>
		</table>
	</form>
</html>