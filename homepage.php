<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
		<div id="main-wrapper">
		<center>
		<h2>Home Page</h2>
		<h3>Welcome
		<?php echo $_SESSION['username']; 
		 $_SESSION['user'] = $_SESSION['username'];?>
		</h3>
		<a href="https://sircon.no/"><img src="images/sircon.jpg" class="avatar"/></a>
		</center>
		
		<center>
		<form class="myform" action="homepage.php" method="post">
		
		<input name = 'logout' type="submit" id="logout_btn" value="Log Out"/>
		<input name = 'canvas' type="submit" id="canvas_btn" value="canvas"/></center>
		
		</form>
		<?php
		if(isset($_POST['logout']))
		{
		session_destroy();
		header('location:anita.php');
		}
		?>
		<?php
		if(isset($_POST['canvas']))
		{
		//session_destroy();
		
		
		header('location:canvas1.php');
		}
		?>
		</center>
		</div>

</body>



</html>