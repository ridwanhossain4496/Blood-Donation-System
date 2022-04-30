<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipient Login</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body><center>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h1 align="center">BLOOD DONATION SYSTEM</h1></div>
			<div id="body">
				<br><br>
				<h1 align="center" style="color: #005406">Login as Recipient</h2>
				<form action="" method="post">
					<table align="center">
						<tr>
							<td width="200px" height="40px"><h2>Username</h2></td>
							<td width="100px" height="40px"><input type="text" name="un" placeholder="Type Your Username" 
							style="width: 300px; height: 30px; border-radius: 10px; font-size:18px; font-style:italic;"></td?=>
						</tr>
						<tr>
							<td width="200px" height="40px"><h2>Password</h2></td>
							<td width="100px" height="40px"><input type="text" name="ps" placeholder="Type Your Password"
							style="width: 300px; height: 30px; border-radius: 10px; font-size:18px; font-style:italic;"></td?=>
						</tr>
						<tr>
							<td><input type="submit" name="sub" value="Login"
							style="background: white; font-size: 28px; font-family: courier; font-weight: 700; color: green; width: 130px; height: 50px; border-radius: 20px;"></td>
						</tr>
					</table><br><br><br>
				</form>
				<?php
					if(isset($_POST['sub'])){
						$un=$_POST['un'];
						$ps=$_POST['ps'];
						$q=$db->prepare("SELECT * FROM recipient WHERE uname='$un' AND pass='$ps'");
						$q->execute();
						$res=$q->fetchAll(PDO::FETCH_OBJ);
						if($res){
							$_SESSION['un']=$un;
							header("Location:recipient-home.php");
						}
						else{
							//echo "<script>alert('Invalid Username/Password')</script>";
							echo "Invalid Username/Password, Please Check Your Username/Password And Try Again";
						}
					}
				?>
				<ul><h2 align="center" style="color: white; font-style:italic;">Don't Have Account? Please Register.</h2>
					<li><a href="recipient-reg.php" style="text-decoration: none; color: green;">Register</a></li>
				</center>
				
			</div>
		</div>
	</div>
	</center>
</body>
<style>
	body{
		background-image: url('background.jpg');
	}
</style>
</html>