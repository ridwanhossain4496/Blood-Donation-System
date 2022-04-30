<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1 align="center"><a href="admin-home.php" style="text-decoration: none; color: white;">
			BLOOD DONATION SYSTEM</a></h1></div>
			<div id="body">
				<br><br>
				<h1 align="center">Select Role to Login</h1><br>
				<center>
				<ul>
					<li><a href="recipient-login.php" style="text-decoration: none; color: green;">Recipient</a></li>
					<li><a href="donor-login.php">Donor</a></li>
					<li><a href="index.php" style="text-decoration: none; color: #01007C;">Admin</a></li>
				</ul><br><br><br>			
			</div>	
		</div>
	</div>			
</body>
<style>
	body{
		background-image: url('background.jpg');
	}
</style>
</html>