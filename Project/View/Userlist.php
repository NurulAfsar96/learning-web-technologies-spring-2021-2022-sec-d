
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<table border="1" width="620px" height="400px">
			<tr>
				<td width="80px;" height="60px">Bangla Travel buddy</td>
				<td align="right" > 
				<a href="Home.php">Home </a> | 
				<a href="../Controller/Logout.php"> LogOut </a> </td></tr>

				<tr>
					<td>
					<table border="1">
						<tr>
							
							<td>Room Type</td>
							<td>Rent Per Day</td>
							<td>Hotel Name</td>
							<td>Facilities</td>
							<td>Action</td>
						</tr>
						<?php

						$file =fopen('../Model/Booklist.txt', 'r');

						while(!feof($file))
							{	$room=fgets($file);
								$userArray=explode('|', $room);
							}
							?>

							<tr>
								<td><?=$userArray[0]?></td>
								<td><?=$userArray[0]?></td>
								<td><?=$userArray[0]?></td>
								<td><?=$userArray[0]?></td>
								




							</tr>
						



					</table>

</td>
				</tr>
			
			




		</table>










	</center>

</body>
</html>