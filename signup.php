<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type=text/css>
	   body{
			background-image: url("4.jpg");
			background-size: cover;
		}
	  
	  #main_content{
   			width: 500px;
    		height: 90%;
    		background: rgb(0,0,0,0.5);
    		color: #fff;
    		position: relative;
    		box-sizing: border-box;
    		padding: 50px 30px;
			margin-bottom:30px;
		}
		#main_content input{
			width:100%;
			margin-bottom:20PX;
		}
		#btn{
			width:100%;
			border:none;
			outline:none;
			height:35px;
			background:#0000CD;
			color:#fff;
			font-size:15px;
			border-radius:20px;
		}
		#btn:hover{
			cursor:pointer;
			background:#1E90FF;
			color:#fff;
		}
		#main_content a{
			text-decoration:none;
			font-size:15px;
			color:#fff;
		}
		#main_content a:hover{
			color:green;
		}

	</style>
  		
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<?php include "sidenav.php";?>
				<button class="navbar-dark bg-dark" style="border: none; color: white; background-color: currentColor; font-size: 25px;" onclick="opennav()">&equiv;</button>
				<a class="navbar-brand" href="index.php">Library Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" id="main_content">
			<center><h3>User Registration</h3></center>
			
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<button type="submit"  id="btn" class="btn btn-primary">Register</button>
			</form>
	</div>
	</div>
	  

</body>
</html>