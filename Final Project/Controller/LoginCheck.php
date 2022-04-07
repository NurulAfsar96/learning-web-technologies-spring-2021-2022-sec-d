<?php
	session_start();	
	require ('../Database/connection.php');
	

	if(isset($_REQUEST['submit']))
	{
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username!=null && $password!= null)
		{
			$sql="SELECT ID FROM serviceprovider WHERE Username ='$username' AND Password='$password' ";
			$sql_query= mysqli_query($conn, $sql);
			$result= mysqli_num_rows($sql_query);


			if($result)
				{ header('location: ../View/Dashboard.php');}
			else
				{ echo "Invalid Username and Password!";}
		}
		
}
		else
		{
			echo "null submission";
		}
	

?>