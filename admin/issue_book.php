<?php
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>issue book</title>
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
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
		  label{
			  color:whitesmoke;
			  font-weight:bold;
			  font-size:18px;
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
</nav></br></br></br>


	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<label>Book Name:</label>
					<input type="text" name="book_name" class="form-control" required="">
				</div>
				<div class="form-group">
			
					
				<div class="form-group">
					<label>Book Number:</label>
					<input type="text" name="book_no" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Student ID:</label>
					<input type="text" name="student_id" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Issue Date:</label>
					<input type="text" name="issue_date" class="form-control" value="<?php echo date("yy-m-d");?>" required="">
				</div>	
				<div class="form-group">
				
				<label>Return Date:</label>
				<input type="date" name="return_date" class="form-control"  required="">
				</div>	
				</div>
				<button class="btn btn-primary" name="issue_book">Issue Book</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>

	 
</body>
</html>

<?php
	if(isset($_POST['issue_book'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query1= "insert into issued_books values(null,$_POST[book_no],'$_POST[book_name]',$_POST[student_id],1,'$_POST[issue_date]','$_POST[return_date]')";
		$query_run = mysqli_query($connection,$query1);
		$q2= "UPDATE books SET quantity = quantity-1 WHERE books.book_name = '$_POST[book_name]'";
		$query_run2 = mysqli_query($connection,$q2);
	}
	
?>