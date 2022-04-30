<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipient Registration</title>
	<link rel="stylesheet" type="text/css" href="css/register2.css">
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1 align="center"><a href="recipient-home.php" style="text-decoration: none; color: white;">
			BLOOD DONATION SYSTEM</a></h1></div><br>
			<div id="body">
				<h1 align="center" style="color: #005406">Register as a Recipient</h2><br>
				<center>
				<div id="form">
					<form action="" method="post">
					<table>
						<tr>
							<td width="250px" height="60px">Username</td>
							<td width="300px" height="60px"><input type="text" name="uname" placeholder="Set Username"
							style="width: 300px; height: 25px; border-radius: 10px; font-size:20px; font-style:italic;"></td>
						</tr>
						<tr>
							<td width="250px" height="60px">Password</td>
							<td width="300px" height="60px"><input type="text" name="pass" placeholder="Set Password"
							style="width: 300px; height: 25px; border-radius: 10px; font-size:20px; font-style:italic;"></td>
						</tr>
						<tr>							
							<td><input type="submit" name="sub" value="Register"
							style="background: white; font-size: 26px; font-family: courier; font-weight: 700; color: green; width: 150px; height: 40px; border-radius: 20px;"></td>
						</tr>
					</table>
					</form><br><br>
					<?php
						if(isset($_POST['sub'])){
							$uname=$_POST['uname'];
							$pass=$_POST['pass'];
							$q=$db->prepare("INSERT INTO recipient (uname, pass) 
							VALUES(:uname,:pass)");
							$q->bindValue('uname',$uname);
							$q->bindValue('pass',$pass);
							if($q->execute()){
								echo "Registration Successfull as a RECIPIENT";
							}
							else{
								echo "Recipient Registration Unsuccessfull";
							}
						}						
					?>
				</div>
				</center><br><br>
				<p align="center"><a href="logout.php"><font color="white"; size="8px">Home Page</font></a></p>
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