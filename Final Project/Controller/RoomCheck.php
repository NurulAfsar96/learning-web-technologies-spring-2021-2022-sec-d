<?php
session_start();

if (isset($_REQUEST['submit'])) {
	$roomtype=$_POST['roomtype'];
	$roomrent=$_POST['rent'];
	$hotelname=$_POST['hotelname'];
	$facilities=$_POST['facilities'];
	

if($roomtype!=null && $roomrent!=null && $hotelname!=null && $facilities!=null)
{

	$room = $roomtype." | ".$roomrent. " | ".$hotelname." | ".$facilities."\r\n";
	
	$file=fopen('../Model/Roomlist.txt' ,'a');
	fwrite($file, $room);
	header('location:../View/Userlist.php');

}
else
{ echo "Null Submission";}

}


?>