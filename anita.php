<?php
session_start();
require 'dbconfig/config.php';
?>
<!doctype html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#CCC">
		<div id="main-wrapper">
			
		<center>
		<h2>Login Form</h2>
		<a href="https://sircon.no/"><img src="images/sircon.jpg" class="avatar"/></a>
		</center>
		
		<center>
		<form class="myform" action="anita.php" method="post">
		<label><strong>Username:</strong></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
		
		<label><strong>Password:</strong></label><br>
		<input name="password"type="password" class="inputvalues" placeholder="Type your password"/><br>
		<center><input name="login"type="submit" id="login_btn" value="Login"/>
		<a href="register.php"><input type="button" id="register_btn" value="Register"/></center></a>
		</form>
		</center>
		<?php
		if(isset($_POST['login']))
		{
				$username=$_POST['username'];
				$password=$_POST['password'];
				
				$query="select * from user WHERE username='$username' AND password='$password'";
				
				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
							//valid
							$_SESSION['username'] = $username;
							header('location:homepage.php');
							//header('location:canvas.html');
				}
				else
				{
					//invalid
					echo'<script type="text/javascript"> alert("Invalid credentials")</script>';
				}
		}
		
		?>
		</div>
		
		
		
	  
</body>



</html>
