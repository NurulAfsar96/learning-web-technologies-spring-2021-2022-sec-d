<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<td colspan="2" valign="top">
					<fieldset>
						<legend>Add Room</legend>
						<form method="POST" action="../Controller/RoomCheck.php">
						<table>
							<tr>
								<td>Types of Room:		</td>
								<td><input type="radio" name="roomtype"> Single </td>
								<td><input type="radio" name="roomtype"> Double </td>
								<td><input type="radio" name="roomtype"> Family </td>
							</tr>
							<tr>
								<td>Rent Per Day:		</td>
								<td> <input type="text" name="rent"></td>
							</tr>

							<tr><td>Hotel Name:		</td> <td><input type="text" name="hotelname"></td></tr>
							<tr>
								
								<td>Facilities:		</td>
								<td><input type="checkbox" name="facilities"> Wifi </td>
								<td><input type="checkbox" name="facilities"> 3 Times Meal </td>
								<td><input type="checkbox" name="facilities"> Swimming Pool </td>
								<td><input type="checkbox" name="facilities"> Others </td>
							</tr>
							<tr>
								
								<td><button type="submit" name="submit" value="submit">Submit</button></td>
								<td><button type="reset" name="reset" value="reset">Reset</button></td>
							</tr>

						</table>
							
						</form>
					</fieldset>


				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"> Copyright @Bangla Travel Buddy </td>
			</tr>
			

		</table>
	</center>

</body>
</html>