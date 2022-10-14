<!DOCTYPE html>
<html>
<head>
	<title>lms</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
		body,html{
			height:100%;
		}

		.bg-image {
  			background-image: url("4.jpg");
  			filter: blur(8px);
  			-webkit-filter: blur(8px);
  			height: 90%;
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
		}
		.bg-text {
  			background-color: rgb(0,0,0); 
 			background-color: rgba(0,0,0, 0.4);
  			color: white;
  			font-weight: bolder;
  			border: 5px solid #f1f1f1;
  			position: absolute;
  			top: 50%;
  			left: 50%;
  			transform: translate(-50%, -50%);
  			z-index: 2;
  			width: 50%;
			height:70%;
  			padding: 20px;
  			text-align: center;
			margin-top:35px;
		}
		h1{
			font-size: 500%;
			margin-top:25%;
			text-transform:uppercase;
			font-family:"Optima",sans-serif;
		}

		
  </style>
 
 	
</head>
<body>


	<nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
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
	</nav>


	
<div class="bg-image"></div>
	<div class="bg-text">
		<h1>welcome</h1>
	
	</div>

               



</body>
</html>