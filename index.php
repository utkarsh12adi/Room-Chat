<!DOCTYPE html>
<html>
<head>
	<title> Room Chat </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#login_form{
		width:350px;
		height:500px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
		opacity:0.95;
		background-color:none;
	}
	
	#full{
		background-image:url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/k-s42-nat-1489-lyj4038-2-chatroom.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=dd8b07acc12d5beff1bf2a5590bc6094");
		background-size:cover;
		background-repeat:none;
		
	}
</style>
</head>
<body>
<div id=full>
<div class="container" >

	<div id="login_form" class="well">
	 <h2><center> Welcome to ROOM CHAT </center></h2>
		<h3><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h3>
		<hr>
		<form method="POST" action="login.php">
		Username: <input type="text" name="username" id="testusername" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" id="testpassword" class="form-control" required> 
		<div style="height: 10px;"></div>
		<center><button type="submit" id="testbutton" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button></center><br><center> No account? <a href="signup.php"> Sign up</a><br><br><br><p6>Designed and Developed by Utkarsh Aditya and Abhishek Gaurov</p6></center>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
	</div>
</div>
</body>
</html>