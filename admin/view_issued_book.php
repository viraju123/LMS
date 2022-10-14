<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_name = "";
	$author = "";
	$book_no = "";
	$student_name = "";
	$query = "select issued_books.s_no, issued_books.book_name,issued_books.book_no,users.name,issued_books.issue_date,issued_books.return_date from issued_books left join users on issued_books.student_id = users.id where issued_books.status=1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>issued books</title>
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
		  table{
			  width:80%;
			  font-size:20px;
			  margin-left:10%;
		  }
		  td{
		color:white;
		background:rgba(0,0,0,0.4);
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


		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr style='background-color: #6db6b9e6;'>
					<th>Name:</th>
					<th>Number:</th>
					<th>Student Name:</th>
					<th>Issue Date:</th>
					<th>Return Date:</th>
				    <th>Action:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$book_name = $row['book_name'];
						
						$book_no = $row['book_no'];
						$student_name = $row['name'];
				        $issue_date = $row['issue_date'];
				        $return_date = $row['return_date'];
				        ?>
						<tr>
							<td><?php echo $book_name;?></td>
							
							<td><?php echo $book_no;?></td>
							<td><?php echo $student_name;?></td>
							<td><?php echo $issue_date;?></td>
							<td><?php echo $return_date;?></td>
							<td>
							
							<button class="btn" name=""><a href="return_book.php?bn=<?php echo $row['book_name'];?>& no=<?php echo $row['book_no'];?>">Return</a></button>
							
							</td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	
	
	  
</body>
</html>