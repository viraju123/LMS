<?php
	
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>feedback</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">

	#side_bar{
	background-color: whitesmoke;
	padding: 50px;
	width: 300px;
	height: 450px;
	}
	.wrapper
    	{
    		padding: 10px;
    		margin: -20px auto;
    		width:900px;
    		height: 600px;
    		background-color: black;
    		opacity: .6;
    		color: black;
			margin-top:30px;
    	}
    	.form-control
    	{
    		height: 100px;
    		width: 60%;
			background-color: #fff;
			margin-top:20px;
			margin-left:20px;
    	}
		.wrapper input[type="submit"]{
			border:none;
			outline:none;
			height:35px;
			background:blue;
			color:#fff;
			font-size:15px;
			border-radius:20px;
			margin-left:20px;
			width:150px;
		}
		.wrapper input[type="submit"]:hover{
			cursor:pointer;
			background:green;
			color:#000;
		}
    	.scroll
    	{
    		width: 95%;
    		height: 300px;
    		overflow: auto;
			text-transform:uppercase;
			font-weight:bolder;
			margin-left:20px;
    	}
		h4{
			color:whitesmoke;
		}
		td{
			color:whitesmoke;
		}
	


	
	</style>
	
	
</head>
<body style="background-image: url(4.jpg) ; background-size: cover;">

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
	</nav><br>
	<div class="wrapper">
		<h4>If you have any suggesions or questions please comment below.</h4>
		<form style="" action="" method="post">
			<input class="form-control" type="text" name="comment" placeholder="Write something..."><br>	
			<input class="btn btn-default" type="submit" name="submit" value="Comment">		
		</form>
	
<br><br>
	<div class="scroll">
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('$_POST[comment]');";
				if(mysqli_query($connection,$sql))
				{
					$q="SELECT * FROM `comments`";
					$res=mysqli_query($connection,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				}

			}

			else
			{
				$q="SELECT * FROM `comments`"; 
					$res=mysqli_query($connection,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
			}
		?>
	</div>
	</div>

</body>
</html>