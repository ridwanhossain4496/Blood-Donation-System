<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Requested Blood List</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<style type="text/css">
		td{
			width:200px;
			height:20px;
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
				<h1 align="center">Requested Blood List</h1>
				<center>
				<div id="form">
					<table>
					<tr>
						<td><center><b><font color= #0000b3>Name</font></b></center></td>
						<td><center><b><font color= #0000b3>Father's Name</font></b></center></td>
						<td><center><b><font color= #0000b3>Address</font></b></center></td>
						<td><center><b><font color= #0000b3>City</font></b></center></td>
						<td><center><b><font color= #0000b3>Age</font></b></center></td>
						<td><center><b><font color= #0000b3>Email</font></b></center></td>
						<td><center><b><font color= #0000b3>Blood Group</font></b></center></td>
						<td><center><b><font color= #0000b3>Requested Blood Group</font></b></center></td>						
						<td><center><b><font color= #0000b3>Mobile Number</font></b></center></td>
					</tr>
					<?php
						$q=$db->query("SELECT * FROM exchange_b");
						while($r1=$q->fetch(PDO::FETCH_OBJ)){
							?>
							<tr>
								<td><center><?= $r1->name; ?></center></td>
								<td><center><?= $r1->fname; ?></center></td>
								<td><center><?= $r1->address; ?></center></td>
								<td><center><?= $r1->city; ?></center></td>
								<td><center><?= $r1->age; ?></center></td>
								<td><center><?= $r1->email; ?></center></td>
								<td><center><?= $r1->bgroup; ?></center></td>
								<td><center><?= $r1->ebgroup; ?></center></td>
								<td><center><?= $r1->mno; ?></center></td>
							</tr>
							<?php
						}
					?>		
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