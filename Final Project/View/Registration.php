<html>
<head>
	
	<title>SignUp form</title>
</head>
<body >
	<center>
	<form action="Login.php"></form>
	<h1>SignUp Form</h1>
	<h4>Please fill this form to create an account</h4>
	<fieldset style="width:320px">
		<form method="POST" action="../Controller/RegCheck.php">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Enter Your Name" value="" required></td>
		</tr>
		<tr>
			<td>User Name:</td>
			<td><input type="text" name="username" placeholder="Enter Your UserName" value="" required></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" placeholder="Enter Your Email" value="" required></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" placeholder="Enter Password" value="" required></td>
		</tr>
		<tr>
			<td>Blood Group:</td>
			<td>
				<select name="blood">
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">0-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				</select>

			</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="address"  placeholder="Enter Your Address" value="" required></td>
		</tr>
		<tr>
			<td>Upload Photo</td>
			<td><input type="file" name="photo"></td>

		</tr>
		<tr>
			
			<td><button type="submit" name="submit" value="Submit"> Sign Up</button> </td>
			
		</tr>



	</table>
</form>
	</fieldset>
	<br>
	Already have an Account?<a href="Login.php"> Login Here </a>
</center>
</body>
</html>