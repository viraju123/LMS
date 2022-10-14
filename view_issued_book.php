<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$book_no = "";
	$issue_date= "";
	$return_date= "";
	$query = "select book_name,book_no,issue_date,return_date from issued_books where student_id = $_SESSION[id] and status = 1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>issued books</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
	  	body{
			  background-image:url(4.jpg);
			  background-size:cover;
		  }
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
		.issued_book{
			margin-left:20px;
			margin-right:20px;
			background-color: #6db6b9e6;
			color:black;
		}
  	
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<?php include "sidenav.php";?>
				<button class="navbar-dark bg-dark" style="border: none; color: white; background-color: currentColor; font-size: 25px;" onclick="opennav()">&equiv;</button>
				<a class="navbar-brand" href="user_dashboard.php">Library Management System</a>
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
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
</br></br>
<div class="issued_book">
		<form>
			<table class="table-bordered" width="100%" height="40px" style="text-align: center">
				<tr>
					<th>Book Name:</th>
					
					<th>Book Number:</th>
					<th>Issue Date:</th>
					<th>Return Date:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$book_name = $row['book_name'];
						
						$book_no = $row['book_no'];
						$issue_date = $row['issue_date'];
		         		$return_date = $row['return_date'];
		         		?>
						<tr>
							<td><?php echo $book_name;?></td>
							
							<td><?php echo $book_no;?></td>
							<td><?php echo $issue_date;?></td>
							<td><?php echo $return_date;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
				</div>

</body>
</html>