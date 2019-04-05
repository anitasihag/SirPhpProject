<?php
require 'dbconfig/config.php';
?>
<!doctype html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	
	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<a href="https://sircon.no/"><img src="images/sircon.jpg" class="avatar"/></a>
		</center>
		
		<center>
			<form class="myform" action="register.php" method="post">
				<label><strong>Username:</strong></label><br>
				<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		
				<label><strong>Password:</strong></label><br>
				<input name="password "type="password" class="inputvalues" placeholder="Type your password" required/><br>
				
				<label><strong>Confirm Password:</strong></label><br>
				<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
		<center>
				<input name="submit_btn"type="submit" id="signup_btn" value="Sign Up"/>
				<a href="anita.php"><input type="button" id="back_btn" value="Back"/></center></a>
			</form>
		</center>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked")</script>';
			$username = $_POST['username'];
			$password = $_POST['cpassword'];
			$cpassword = $_POST['cpassword'];
			
			if($password==$cpassword)
			{
				$query= "select * from user WHERE username='$username'";
				$query_run = mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				//there is already a user with the same username
				echo '<script type="text/javascript"> alert("User already exists...try another username")</script>';
			}
			else
			{
				$query="insert into user values('$username','$password')";
				$query_run = mysqli_query($con,$query);
				
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("User Registered..Go to login page to login")</script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error!")</script>';
				}
			
			
			}
			
			}
			else
			{
			echo '<script type="text/javascript"> alert("Password and confirm password does not match")</script>';
			}
		}
		?>
		</div>
</body>
</html>