<?php
session_start();

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

	$user = $name." | ".$username. " | ".$password." | ".$email." | ".$blood." | ".$address." | ".$photo."\r\n";
	
	$file=fopen('../Model/ServiceProvider.txt' ,'a');
	fwrite($file, $user);
	header('location:../View/Login.php');

}
else
{ echo "Null Submission";}

}


?>