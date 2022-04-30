<?php
	include('connection.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exchange Blood Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
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
				<h1 align="center">Recipient Registration</h1>
				<center>
				<div id="form">
					<form action="" method="post">
					<table>
						<tr>
							<td width="200px" height="60px">Full Name</td>
							<td width="200px" height="60px"><input type="text" name="name" placeholder="Enter Full Name"
							style="width: 160px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;"></td>
							<td width="200px" height="60px">Father's Name</td>
							<td width="200px" height="60px"><input type="text" name="fname" placeholder="Enter Father's Full Name"
							style="width: 160px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;"></td>
						</tr>
						<tr>
							<td width="200px" height="60px">Present Address</td>
							<td width="200px" height="60px"><input type="text" name="address" placeholder="Enter Present Address"
							style="width: 160px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;"></td>
							<td width="200px" height="60px">Present City</td>
							<td width="200px" height="60px"><input type="text" name="city" placeholder="Enter Present City"
							style="width: 160px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;"></td>
						</tr>
						<tr>
							<td width="200px" height="60px">Age</td>
							<td width="200px" height="60px"><input type="text" name="age" placeholder="Enter Age"
							style="width: 160px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;"></td>
							<td width="200px" height="60px">E-mail</td>
							<td width="200px" height="60px"><input type="text" name="email" placeholder="Enter E-mail"
							style="width: 160px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;"></td>
						</tr>
						<tr>
							<td width="200px" height="60px">Blood Group</td>
							<td width="200px" height="60px">
								<select name="bgroup" style="width: 80px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;">
									<option>A+</option>
									<option>B+</option>
									<option>AB+</option>
									<option>O+</option>
									<option>A-</option>
									<option>B-</option>
									<option>AB-</option>
									<option>O-</option>
								</select>
							</td>
							<td width="200px" height="60px">Request Blood Group</td>
							<td width="200px" height="60px">
								<select name="ebgroup" style="width: 80px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;">
									<option>A+</option>
									<option>B+</option>
									<option>AB+</option>
									<option>O+</option>
									<option>A-</option>
									<option>B-</option>
									<option>AB-</option>
									<option>O-</option>
								</select>
							</td>
						</tr>
						<tr>

							<td width="200px" height="60px">Contact Number</td>
							<td width="200px" height="60px"><input type="text" name="mno" placeholder="Enter Contact No"
							style="width: 160px; height: 20px; border-radius: 10px; font-size:14px; font-style:italic;"></td>
						</tr>
						<br>
						<tr>							
							<td><input type="submit" name="sub" value="Save"
							style="background: white; font-size: 22px; font-family: courier; font-weight: 700; color: green; width: 130px; height: 40px; border-radius: 20px;"></td>
						</tr>
					</table>
					</form>
					<?php
						if(isset($_POST['sub'])){
							$name=$_POST['name'];
							$fname=$_POST['fname'];
							$address=$_POST['address'];
							$city=$_POST['city'];
							$age=$_POST['age'];							
							$email=$_POST['email'];
							$bgroup=$_POST['bgroup'];
							$ebgroup=$_POST['ebgroup'];
							$mno=$_POST['mno'];
														
							$q=$db->prepare("INSERT INTO exchange_b (name,fname,address,city,age,email,bgroup,ebgroup,mno) 
							VALUES(:name,:fname,:address,:city,:age,:email,:bgroup,:ebgroup,:mno)");
							$q->bindValue('name',$name);
							$q->bindValue('fname',$fname);
							$q->bindValue('address',$address);
							$q->bindValue('city',$city);
							$q->bindValue('age',$age);
							$q->bindValue('email',$email);
							$q->bindValue('bgroup',$bgroup);
							$q->bindValue('ebgroup',$ebgroup);
							$q->bindValue('mno',$mno);
							if($q->execute()){
								echo "Blood Request Successfull";
							}
							else{
								echo "Blood Request Unsuccessfull";
							}
						}						
					?>
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