<?php
	
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Books</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
	<div class="srch">
	  <form class="navbar-form" method="post" name="form1">
	     <input class="form-control" type="text" name="search" placeholder="search book" required>
	     <button  type="submit" name="submit" id="btn1" class="btn btn-default">
	       <Span>search</Span>
	     </button>
	  </form>
	  
	</div>
	
	<br><br>
	<div class="book_content">
	
	<h2>List Of Books</h2>
	<?php
	
	if(isset($_POST['submit']))
	{
	  $q= mysqli_query($connection,"SELECT books.book_id, books.book_name, authors.author_name, category.cat_name,  books.quantity FROM books  
	  JOIN authors ON authors.author_name=books.author_name 
	  JOIN category ON category.cat_name=books.cat_name WHERE book_name LIKE '%$_POST[search]%'");
	  
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
		JOIN authors ON authors.author_name=books.author_name 
		JOIN category ON category.cat_name=books.cat_name  ");

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