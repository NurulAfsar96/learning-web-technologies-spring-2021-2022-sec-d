<html>
<head>

	<title> Login Form</title>
</head>
<body>
	<center>

	<h1>Login Form</h1>
	<form  method="POST" action="../Controller/LoginCheck.php">
		<fieldset style="width:300px">
	<table >
		

		<tr>
			<td>UserName</td>
			<td><input type="text" name="username" value=""></td>
		</tr>
<tr>
			<td>Password</td>
			<td><input type="password" name="password" value=""></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>

	</table>
</form>
	Dont register yet?<a href="Registration.php"> Register</a>
</fieldset>
</center>
</body>
</html>