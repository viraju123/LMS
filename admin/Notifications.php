<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>notification</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
			<?php include "sidenav.php";?>
			<button class="navbar-dark bg-dark" style="border: none; color: white; background-color: currentColor; font-size: 25px;" onclick="opennav()">&equiv;</button>
				<a class="navbar-brand" href="index.php">Library Management System</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
				<div class="dropdown-menu">
					<a href="add_book.php" class="dropdown-item">Add New Book</a>
					<a href="manage_book.php" class="dropdown-item">Manage Books</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="add_cat.php" class="dropdown-item">Add New Category</a>
					<a href="manage_cat.php" class="dropdown-item">Manage Category</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
				<div class="dropdown-menu">
					<a href="add_author.php" class="dropdown-item">Add New Author</a>
					<a href="manage_author.php" class="dropdown-item">Manage Authors</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="issue_book.php" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav></br>

<div class="wrapper">
	<h4>Enter Notification :</h4>
	<form style="" action="" method="post">
		<input class="form-control" type="text" name="notification" placeholder="Write something..."><br>	
		<input class="btn btn-default" type="submit" name="submit" value="submit">		
	</form>

<br><br>
<div class="scroll">
	<?php
		if(isset($_POST['submit']))
		{
			$sql="INSERT INTO `notification` VALUES('','$_POST[notification]',1);";
			if(mysqli_query($connection,$sql))
			{
				$q="SELECT * FROM `notification` WHERE status=1";
				$res=mysqli_query($connection,$q);

				echo "<table class='table table-bordered'>";
				while ($row=mysqli_fetch_assoc($res)) 
				{
					echo "<tr>";
						echo "<td>"; echo $row['data']; 
						   echo (' <button class="btn" name=""><a href="delete_notification.php?bn=');  echo" $row[id]"; echo('">Delete</a></button>');
					echo "</td>";
					echo "</tr>";
				}
			}

		}

		else
		{
			$q="SELECT * FROM `notification` WHERE status=1"; 
				$res=mysqli_query($connection,$q);

				echo "<table class='table table-bordered'>";
				while ($row=mysqli_fetch_assoc($res)) 
				{
					echo "<tr>";
						echo "<td>"; echo $row['data']; 
						echo (' <button class="btn" name=""><a href="delete_notification.php?bn=');  echo" $row[id]"; echo('">Delete</a></button>');
					echo "</td>";
					echo "</tr>";
				}
		}
	?>
</div>
</div>
	
</body>
</html>