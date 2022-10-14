<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_id = "";
	$book_name = "";
	$author_name = "";
	$cat_name = "";
	$book_price = "";
	$quantity = "";
	$query = "select * from books where book_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$book_name = $row['book_name'];
		$book_id = $row['book_id'];
		$author_name = $row['author_name'];
		$cat_name = $row['cat_name'];
		$book_price = $row['book_price'];
		$quantity = $row['quantity'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit book</title>
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
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<label>Book Id:</label>
					<input type="text" name="book_id" value="<?php echo $book_id;?>" class="form-control" disabled>
				</div>
				<div class="form-group">
					<label>Book Name:</label>
					<input type="text" name="book_name" value="<?php echo $book_name;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Author Name:</label>
					<input type="text" name="author_name" value="<?php echo $author_name;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Category:</label>
					<input type="text" name="cat_name" value="<?php echo $cat_name;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Book Price:</label>
					<input type="text" name="book_price" value="<?php echo $book_price;?>" class="form-control" required="">
				</div>
				<div class="form-group">
				<label>Quantity:</label>
				<input type="text" name="quantity" value="<?php echo $quantity;?>" class="form-control" required="">
				</div>
				<button class="btn btn-primary" name="update">Update Book</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>

	   

</body>
</html>

<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "update books set book_name = '$_POST[book_name]',author_name='$_POST[author_name]',cat_name='$_POST[cat_name]',book_price = '$_POST[book_price]', quantity='$_POST[quantity]' where book_id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		
		$q1= mysqli_query($connection,"select author_name from authors where author_name='$_POST[author_name]'");
		if(mysqli_num_rows($q1)==0)
		{
		$query2 = "insert into authors values('','$_POST[book_author]')";
		$query_run2 = mysqli_query($connection,$query2);
		}
		
		$q2= mysqli_query($connection,"select cat_name from category where cat_name='$_POST[cat_name]'");
		if(mysqli_num_rows($q2)==0)
		{
		$query3 = "insert into category values('','$_POST[book_cat]')";
		$query_run3 = mysqli_query($connection,$query3);
		}
		?>
		<script type="text/javascript">
		alert("Updated successfully...");
		window.location.href = "manage_book.php";
		</script>
<?php		
	}
?>