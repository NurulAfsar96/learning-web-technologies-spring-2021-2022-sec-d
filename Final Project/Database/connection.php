<?php 

	$hostname='localhost';
	$username='root';
	$password='';
	$dbname='webproject';

	$conn = mysqli_connect($hostname,$username,$password,$dbname);

	if($conn){
		echo "Database Connected Succesfully";
	}else{
		echo "Database Connection Failed";
	}

	/*$sql = "select * from users";
	$sql = "update users set username='ABC' where id=8";
	if(mysqli_query($conn, $sql)){
		echo "updated!";
	}else{
		echo "error";
	}

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$row1 = mysqli_fetch_assoc($result);
	print_r($row);
	print_r($row1);
	while($row = mysqli_fetch_assoc($result)){
		print_r($row);
		echo "<br>";
	}*/
?>