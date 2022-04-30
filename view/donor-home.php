<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Home</title>
	<link rel="stylesheet" type="text/css" href="css/recipient-home.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1 align="center"><a href="donor-home.php" style="text-decoration: none; color: white;">
			BLOOD DONATION SYSTEM</a></h1></div>
			<div id="body">
				<br><br>
				<h1 align="center">Welcome <?php
					echo $un=$_SESSION['un'];
					if(!$un){
						header("Location:donor-home.php");
					}
				?></h1><br>
				<center>
				<ul>
					<li><a href="donor-red.php">Donor Registration</a></li>
					<li><a href="donor-list.php">Donor List</a></li>
					
				</ul><br><br><br>
				<ul>
					<li><a href="available-blood-list.php">Available Blood List</a></li>
					<li><a href="exchange-blood-list.php">Exchanged Blood List</a></li>
				</center>
				</ul>
				</center>
			</div>
			<div id="footer"></div>
				<p align="center"><a href="logout.php"><font color="white"; size="8px">Logout</font></a></p>
		</div>
	</div>			
</body>
<style>
	body{
		background-image: url('background.jpg');
	}
</style>
</html>