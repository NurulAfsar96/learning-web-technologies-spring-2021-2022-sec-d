

<html>
<head>

	<title> Login Form</title>
	<script type="text/javascript">
		
function validatelogin()
{
let x= document.forms["LoginForm"]["username"].value;
if (x=="") {alert("Username or Password must be filled out");
return false;}

}


	</script>
</head>
<body>
	<center>

	<h1>Login Form</h1>
	<form name="LoginForm" method="POST" action="../Controller/LoginCheck.php" onsubmit="return validatelogin()">
		<fieldset style="width:300px">
	<table >
		

		<tr>
			<td>UserName</td>
			<td><input type="text" name="username" placeholder="Enter Username" value="" required></td>
		</tr>
<tr>
			<td>Password</td>
			<td><input type="password" name="password" placeholder="Enter Your Password" value="" required></td>
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