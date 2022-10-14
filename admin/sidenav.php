<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.sidenav{
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: #111;
			overflow-x: hidden;
			padding-top: 60px;
			transition: 0.5s;
		}

		.sidenav a {
			padding: 8px 8px 8px 60px;
			font-size: 25px;
			text-decoration: none;
			color: #818181;
			display: block;
			transition: 0.3s;
		}
		.sidenav a:hover{
			color :#f1f1f1;
		}
		.sidenav .closebtn{
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}
	</style>
	<script type="text/javascript">
		function opennav(){
			document.getElementById("mysidenav").style.width="360px";
		}
		function closenav(){
			document.getElementById("mysidenav").style.width="0";
		}
	</script>
</head>
<body>
	<div id="mysidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a>
		<a href="About-us.php">About us</a>
		<a href="Books.php">Books</a>
		<a href="Notifications.php">Notifications</a>
		<a href="Feedback.php">Feedback</a>
		<a href="Contact.php">Contact</a>
		
	</div>
	
</body>
</html>