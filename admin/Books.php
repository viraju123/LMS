<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Books</title>
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
	
	.srch{
	float : right;
	margin-right:20px;
	}
	.book_content{
		margin-left:20px;
		margin-right:20px;
	}
	h2{
		text-decoration:underline;
		color:whitesmoke;
	}
	td{
		color:white;
		background:rgba(0,0,0,0.4);
	}
	#btn1{
		margin-top:5px;
		background-color : #6db6b9e6;
	}
	#btn1:hover{
		background:blue;
		color:white;
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
	<div class="srch">
	  <form class="navbar-form" method="post" name="form1">
	     <input class="form-control" type="text" name="search" placeholder="search book" required>
	     <button  type="submit" name="submit" id="btn1" class="btn btn-default">
	       <Span>search</Span>
	     </button>
	  </form>
	  
	</div>
	
</br></br>
	<div class="book_content">
	
	<h2>List Of Books</h2>
	<?php
	
	if(isset($_POST['submit']))
	{
	  $q= mysqli_query($connection,"SELECT books.book_id, books.book_name, authors.author_name, category.cat_name,  books.quantity FROM books  
	  JOIN authors ON books.author_name=authors.author_name 
	  JOIN category ON books.cat_name=category.cat_name WHERE book_name LIKE '%$_POST[search]%'");
	  
	  if(mysqli_num_rows($q)==0)
	    {
	      echo " no books found ! " ;
	    }
	  else
	    {
	      echo "<table class='table table-bordered table-hover' >";
	      echo "<tr style='background-color: #6db6b9e6;'>";
	      //Table header
	      echo "<th>"; echo "Book Id";	echo "</th>";
	      echo "<th>"; echo "Book Name";  echo "</th>";
	      echo "<th>"; echo "Author Name";  echo "</th>";
	      echo "<th>"; echo "Category Name";  echo "</th>";
	      
	      echo "<th>"; echo "Quantity";  echo "</th>";
	      echo "</tr>";	
	      
	      while($row=mysqli_fetch_assoc($q))
	      {
	      
	      echo "<tr>";
	      echo "<td>"; echo "$row[book_id]";	echo "</td>";
	      echo "<td>"; echo "$row[book_name]";  echo "</td>";
	      echo "<td>"; echo "$row[author_name]";  echo "</td>";
	      echo "<td>"; echo "$row[cat_name]";  echo "</td>";
	      echo "<td>"; echo "$row[quantity]";  echo "</td>";
	      
	      echo "</tr>";
	      }
	      echo "</table>";
	    }
	}
	
	else
	{
		$res=mysqli_query($connection,"SELECT books.book_id, books.book_name, authors.author_name, category.cat_name,  books.quantity FROM books  
		JOIN authors ON books.author_name=authors.author_name 
		JOIN category ON books.cat_name=category.cat_name  ");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "Book Id";	echo "</th>";
				echo "<th>"; echo "Book Name";  echo "</th>";
				echo "<th>"; echo "Author Name";  echo "</th>";
				echo "<th>"; echo "Category Name";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
			
				echo "<tr>";
				echo "<td>"; echo "$row[book_id]";	echo "</td>";
				echo "<td>"; echo "$row[book_name]";  echo "</td>";
				echo "<td>"; echo "$row[author_name]";  echo "</td>";
				echo "<td>"; echo "$row[cat_name]";  echo "</td>";
				echo "<td>"; echo "$row[quantity]";  echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}
	?>
	</div>
</body>
</html>