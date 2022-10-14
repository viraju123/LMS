
<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "UPDATE issued_books SET status=0 WHERE issued_books.book_no= '$_GET[no]'";
	
	$query_run = mysqli_query($connection,$query);
	
	$q2= "UPDATE books SET quantity = quantity+1 WHERE books.book_name = '$_GET[bn]'";
	$query_run2 = mysqli_query($connection,$q2);
?>

<script type="text/javascript">
	alert("book returned...");
	window.location.href = "view_issued_book.php";
</script>