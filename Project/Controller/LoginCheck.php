<?php	
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username!=null && $password!= null){

			//$user = $_SESSION['user'];

			$file = fopen('../Model/ServiceProvider.txt', 'r');
			while(!feof($file)){
				$user = fgets($file);
				$userArry = explode('|', $user);
				print_r($userArry);

				if(trim($userArry[1])==$username && trim($userArry[2])==$password){
					setcookie('status', 'true', time()+3600, '/');
					header('location:../View/Dashboard.php');
				}
			}

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}

?>