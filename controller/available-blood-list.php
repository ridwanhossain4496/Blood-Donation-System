<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Available Blood List</title>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1 align="center"><a href="admin-home.php" style="text-decoration: none; color: white;">
			BLOOD DONATION SYSTEM</a></h1></div>
			<div id="body">
				<?php
					$un=$_SESSION['un'];
					if(!$un){
						header("Location:index.php");
					}
				?>
				<h1 align="center">Available Blood List</h1><br><br>
				<center>
				<div id="form">
					<table>
						<tr>
							<td><center><b><font color ="blue">Blood Group</font></b></center></td>
							<td><center><b><font color ="blue">Available</font></b></center></td>
						</tr>
						<tr>
							<td><center>A+</center></td>
							<td><center>
							<?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
								echo $row=$q->rowcount();
							?>
							</center></td>
						</tr>
						<tr>
							<td><center>B+</center></td>
							<td><center>
							<?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
								echo $row=$q->rowcount();
							?>
							</center></td>
						</tr>
						<tr>
							<td><center>AB+</center></td>
							<td><center>
							<?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
								echo $row=$q->rowcount();
							?>
							</center></td>
						</tr>
						<tr>
							<td><center>O+</center></td>
							<td><center>
							<?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
								echo $row=$q->rowcount();
							?>
							</center></td>
						</tr>
							<tr>
							<td><center>A-</center></td>
							<td><center>
							<?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
								echo $row=$q->rowcount();
							?>
							</center></td>
						</tr>
						<tr>
							<td><center>B-</center></td>
							<td><center>
							<?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
								echo $row=$q->rowcount();
							?>
							</center></td>
						</tr>
						<tr>
							<td><center>AB-</center></td>
							<td><center>
							<?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
								echo $row=$q->rowcount();
							?>
							</center></td>
						</tr>
						<tr>
							<td><center>O-</center></td>
							<td><center>
							<?php
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
								echo $row=$q->rowcount();
							?>
							</center></td>
						</tr>
					</table>
				</div>
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