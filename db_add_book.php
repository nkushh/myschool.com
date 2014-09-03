<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$book_name=$_POST["book_name"];
$author=$_POST["author"];
$book_code=$_POST["book_code"];
$category=$_POST["category"];
$class=$_POST["class"];
//Inserts the above data into the specified column in the database.
$query="INSERT INTO books (book_name, author, book_code, category, class)
VALUES ('{$book_name}', '{$author}', '{$book_code}', '{$category}', '{$class}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("view_books.php?class=1");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>