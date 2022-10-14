<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

  	<style type="text/css">

  			#side_bar{
  			background-color: whitesmoke;
  			position: fixed;
  			padding: 50px;
  			width: 350px;
  			height: 450px;
  		}
  		
  		p{
  			font-size: large;
  			text-align: justify;
  		}
  	</style>
 
 	
</head>
<body>


	<nav  class="navbar navbar-expand-lg navbar-dark bg-dark" >
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
	</nav><br><br><br>

			<div class="row">
		 		<div class="col-md-4">
                 <div id="side_bar">
          			<h3><a href="#Book Shelves">&raquo; Book Shelves</a></h3>
          			<h3><a href="#Reading Area">&raquo; Reading Area</a></h3>
          			<h3><a href="#Computers">&raquo; Computers</a></h3>
          			<h3><a href="#Property Counter">&raquo; Property Counter</a></h3>
          			<h3><a href="#CCTV cameras">&raquo; CCTV cameras</a></h3>
          			<h3><a href="#Wifi routers">&raquo; Wifi routers</a></h3>
          			<h3><a href="#Air conditioning">&raquo; Air conditioning</a></h3>
				 </div>
				</div>
				<div class="col-md-6">
				 
				     <u><a  name="Book Shelves"><h2>Book Shelves</h2></a></u>
				   
				<br> <u><a  name="Reading Area"><h2>Reading Area</h2></a></u>
				 	
				<br> <u><a  name="Computers"><h2>Computers</h2></a></u>
				
				<br> <u><a  name="Property Counter"><h2>Property Counter</h2></a></u>
				<br> <u><a  name="CCTV cameras"><h2>CCTV cameras</h2></a></u>
				<br> <u><a  name="Wifi routers"><h2>Wifi routers</h2></a></u>
				<br> <u><a  name="Air conditioning"><h2>Air conditioning</h2></a></u>
			</div></div>
				 

	

                


</body>
</html>