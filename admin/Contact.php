<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>contact</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		background-image: url(4.jpg) ;
		background-size: cover;
	}
	#side_bar{
	background-color: whitesmoke;
	padding: 50px;
	width: 300px;
	height: 450px;
	}
	.contact_details{
		width:50%;
		margin-left:25%;
		margin-top:50px;
	}
	td{
		color:whitesmoke;
		background:rgba(0,0,0,0.4);
		font-weight:bold;
		font-size:20px;
	}
	th{
		font-weight:bolder;
		font-size:25px;
	}
	img{
		border-radius:50px;
	}
	
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
			<?php include "sidenav.php";?>
			<button class="navbar-dark bg-dark" style="border: none; color: white; background-color: currentColor; font-size: 25px;" onclick="opennav()">&equiv;</button>
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
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
</nav>
<div class="contact_details">
		<table class='table table-bordered table-hover' >
			<tr style='background-color: #6db6b9e6;'>
				<th>Name:</th>
				<th>Contact Info:</th>
				<th>Photo</th>
			</tr>
			<tr>
				<td>Librarian</td>
				<td>Ph:1234567890</br>
					Email:libary@gmail.com
				</td>
				<td><img src="user.jpg" alt="user" width="100" height="100"></td>
			</tr>
			<tr>
				<td>Asst. Libarian</td>
				<td>
					Ph:7008567999</br>
					Email:asstlibary@gmail.com
				</td>
				<td><img src="user.jpg" alt="user" width="100" height="100"></td>
			</tr>
			<tr>
				<td>Staff 1</td>
				<td>
					Ph:9877773331</br>
					Email:stafflibary@gmail.com
				</td>
				<td><img src="user.jpg" alt="user" width="100" height="100"></td>
			</tr>
			<tr>
				<td> Staff 2</td>
				<td>
					Ph:9777700000</br>
					Email:staff2libary@gmail.com
				</td>
				<td><img src="user.jpg" alt="user" width="100" height="100"></td>
			</tr>
		</table>
	</div>
	
</body>
</html>