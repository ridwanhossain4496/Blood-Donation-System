<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipient Home</title>
	<link rel="stylesheet" type="text/css" href="css/recipient-home.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1 align="center"><a href="recipient-home.php" style="text-decoration: none; color: white;">
			BLOOD DONATION SYSTEM</a></h1></div>
			<div id="body">
				<br><br>
				<h1 align="center">Welcome <?php
					echo $un=$_SESSION['un'];
					if(!$un){
						header("Location:recipient-home.php");
					}
				?></h1><br>
				<center>
				<ul>
					<li><a href="donor-list.php">Donor List</a></li>
					<li><a href="available-blood-list.php">Available Blood List</a></li>
				</ul><br><br><br>
				<ul>
					<li><a href="exchange-blood-registration.php">Request Blood</a></li>
					<li><a href="exchange-blood-list.php">Requested Blood List</a></li>
				</center>
				</ul>
				
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