<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
	   body{
			background-image: url("4.jpg");
			background-size: cover;
		}
  		#side_bar{
  			background-color:whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
		#main_content{
   			width: 320px;
    		height: 420px;
    		background: rgb(0,0,0,0.5);
    		color: #fff;
    		top: 50%;
    		left: 50%;
    		position: absolute;
    		transform: translate(-50%,-50%);
    		box-sizing: border-box;
    		padding: 50px 30px;
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
				<a class="navbar-brand" href="../index.php">Library Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../login.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../signup.php">Register</a>
				</li>
			</ul>
		</div>
</nav></br></br></br>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" id="main_content">
			<center><h3>Admin Login</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login"  id="btn" class="btn btn-primary">Login</button>
				<a href="#">Forgot Password</a>
			</form>

			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								header("Location:admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
	</div>
	</div>

	
</body>
</html>