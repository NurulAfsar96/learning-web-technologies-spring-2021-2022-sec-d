<?php

function getConnection(){

$host="localhost";
$dbname="webproject";
$dbpass="";
$dbuser="root";

$conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
return $conn;

}

function Login($username,$password)
{
	$conn=getConnection();
	$sql= "select * from testdb where username='{$username}' and password='{$password}'";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result))
		{ return true;}
	else{ return false;}

}

function signup($name,$username,$password,$email,$blood,$address,$photo)
{
		$conn = getConnection();
		$sql= "insert into testdb values('', '{$name}', '{$username}', '{$password}', '{$email}', '{$blood}', '{$address}', '{$photo}',  'user')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserById($id){

	}

	function updateUser($user){

	}

	function deleteUser($id){

	}

	function getAllUser(){

	}



?>