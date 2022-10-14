<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>about us</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>

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
</nav><br><br><br>

			<div class="row">
		 		<div class="col-md-4">
                 <div id="side_bar">
          			<h3><a href="#Introduction">&raquo; Introduction</a></h3>
          			<h3><a href="#Mission & Vision">&raquo; Mission & Vision</a></h3>
          			<h3><a href="#Timing">&raquo; Timing</a></h3>
          			<h3><a href="#Facilities">&raquo; Facilities</a></h3>
          			<h3><a href="#Resources">&raquo; Resources</a></h3>
          			<h3><a href="#Regulations">&raquo; Regulations</a></h3>
				 </div>
				</div>
				<div class="col-md-6">
				 <u><a  name="Introduction"><h2>Introduction</h2></a></u>
				 	
				    <p>
				    	The library plays a vital role in furthering the academic and research missions and facilitates creation and dissemination of knowledge . The range and quality of services offered by the library are comparable to any modern libraries in india of international standard.
				    </p>
				    <p>
				    	Soon after the formal apearance of the library in the year 2021, immediate emphasis was given for a good collection development on text books and refference books. Besides holding an excellent print collection of book, it also provides access to popular magazines,journals, theses, reports, e-books, e-journals etc.   
				    </p>
				    <p>
				    	The library is marching towards its goal by taking some good initiatives like providing fully air-condition facility in the library, e-resourse zone as well as computer center, separate server for library operation, good collection of documents and providing sufficient computers in the library for accessing OPAC and e-resources, develop a property counter with security and CCTV cameras for proper surveillance of the library.
				    </p><br>

				     <u><a  name="Mission & Vision"><h2>Mission & Vision</h2></a></u>
				    <p>
				    	The library promises to promote the educational missions as well as to discover, preserve, and disseminate knowledge. It engages with the ongoing technological transformations to deliver world class physical and digital content and services significant to education, research, publication, and outreach.
				    </p>
				    <p>
				 		The library aims to be a leading academic research library in the area. The eclectic collection that constitutes the library comprises Encyclopedias, Dictionaries on various subjects, general collections, valuable source books, critical works as well as specific skills related books on personality development, time management and communication skills.
 				 	</p>
				    <p>
				    	Empowering research and learning community with enriching collections, innovative services and state of art technologies strengthened by  strategic partnerships with national and international library networks.
				    </p>

				<br> <u><a  name="Timing"><h2>Timing</h2></a></u>
				 	<p>
				 		<b>Monday To Friday &nbsp;&nbsp;:</b>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	9.00am - 9.00pm<br>
				 		<b>Saturday & Sunday :</b>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	9.00am - 1.00pm<br>
				 		<b>Govt. Holidays &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	closed<br>
				 	</p>
				<br> <u><a  name="Facilities"><h2>Facilities</h2></a></u>
				<p> <ul>
					<li>Fully Air-conditioned.</li>
					<li>Free Wifi.</li>
					<li>Proper Lighting.</li>
					<li>separate server for library operation.</li>
					<li>e-resourse zone.</li>
					<li>Sufficient computers for accessing OPAC and e-resources.</li>
					<li>CCTV cameras for proper surveillance.</li>
					<li>Property counter with security.</li>
					<li>Large study space.</li>
					<li>Properly managed book shelves.</li>
				 </ul></p>
				<br> <u><a  name="Resources"><h2>Resources</h2></a></u>
				 <p>
				 	<table  border="1">
				 		<tr>
				 			<th>Books:</th>
				 			<td width="480px" align="right">0</td>
				 		</tr>
				 		<tr>
				 			<th>Ebooks:</th>
				 			<td></td>
				 		</tr>
				 		<tr>
				 			<th>Journals:</th>
				 			<td></td>
				 		</tr>
				 		<tr>
				 			<th>Newspapers:</th>
				 			<td></td>
				 		</tr>
				 		<tr>
				 			<th>CDs/DVDs</th>
				 			<td></td>
				 		</tr>
				 		<tr>
				 			<th>Theses:</th>
				 			<td></td>
				 		</tr>
				 		<tr>
				 			<th>Self Published Books:</th>
				 			<td></td>
				 		</tr>
				 		

				 	</table>
				 </p>
				 <br> <u><a  name="Regulations"><h2>Regulations</h2></a></u>
					 <p>
				  	<b>General Rules</b>
				  	<ul>
				  		<li>Strict silence, decorum and discipline must be maintained in the library.</li>
				  		<li>Smoking, eating, sleeping and talking loudly are strictly prohibited.</li>
				  		<li>Reader should not mark, underline, write, tear pages.</li>
				  		<li>Newspapers & magazines must be read only on the slpecified tables.</li>
				  		<li>No libvrary material can be taken out of the library.</li>
				  		<li>Unauthorized removal of anything belonging to the library will be treated as theft and dealt accordingly.</li>
				  		<li>Anyone who violates the rules and regulations of the library would be liable to lose the privilege of library membership and may be debarred from using the library facilities.</li>
				  		<li>Suggestions on all aspects of library services are welcome.</li>
				  	</ul>
				  	<b>Issue & Return Rules</b><br><br>
				  	<table>
				  		<tr>
				  			<th width="100px">Sl.No.</th>
				  			<th width="300px">Member Category</th>
				  			<th width="200px" >No. Of Books</th>
				  			<th width="200px" >Issue Period</th>
				  		</tr>
				  		<tr>
				  			<th>1.</th>
				  			<td>Faculty</td>
				  			<td>5</td>
				  			<td>1 month</td>
				  		</tr>
				  		<tr>
				  			<th>2.</th>
				  			<td>Research Scholars</td>
				  			<td>5</td>
				  			<td>15 days</td>
				  		</tr>
				  		<tr>
				  			<th>3.</th>
				  			<td>PG students</td>
				  			<td>4</td>
				  			<td>15 days</td>
				  		</tr>
				  		<tr>
				  			<th>4.</th>
				  			<td>UG students</td>
				  			<td>3</td>
				  			<td>15 days</td>
				  		</tr>
				  		<tr>
				  			<th>5.</th>
				  			<td>Technical Staff</td>
				  			<td>2</td>
				  			<td>15 days</td>
				  		</tr>
				  		<tr>
				  			<th>6.</th>
				  			<td>Administrative Staff</td>
				  			<td>2</td>
				  			<td>15 days</td>
				  		</tr>
				  	</table><br>
				  	<ul>
				  		<li>A fine of 5 rupees per day per book will be charged from the dafaulting members.</li>
				  		<li>If the book is lost then the member will be charged twice the cost of the book.</li>
				  	</ul>
				  </p>

				 
				</div>
            	</div>

	

              



</body>
</html>