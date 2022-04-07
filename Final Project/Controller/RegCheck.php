<?php

session_start();
require ('../Database/connection.php');

if (isset($_REQUEST['submit'])) {
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$blood=$_POST['blood'];
	$address=$_POST['address'];
	$photo=$_POST['photo'];

if($name!=null && $username!=null && $password!=null && $email!=null && $blood!=null && $address!=null && $photo!=null)
{

	$sql= "INSERT INTO serviceprovider(Name,Username,Email,Password,Blood_Group,Address,Image) VALUES('$name','$username','$email','$password','$blood','$address','$photo')";

	$query= mysqli_query($conn,$sql);
	if($query){
		header('location:../View/Login.php');
	}
		else{echo "Failed to Register";}

}
	}

else
{ echo "Null Submission";}




?>