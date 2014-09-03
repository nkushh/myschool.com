<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
 $book_code = $_GET["book_code"];

$query="UPDATE books, lend_books SET books.availability='1', lend_books.status='1' WHERE books.book_code='$book_code' AND lend_books.book_code='$book_code'";
	$result=mysqli_query($conn, $query);
	
if($result){
	redirect_to("return_book.php");
	echo "Data successfully updated";
}else{
	die("Data could not be updated! ".mysqli_error($conn));
}
?>