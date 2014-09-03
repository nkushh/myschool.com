<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$adm_no=$_POST["adm_no"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$sex=$_POST["sex"];
$class=$_POST["class"];
$book_title=$_POST["book_title"];
$book_code = $_POST["book_code"];
$date1=$_POST["day1"] ."/". $_POST["month1"] ."/". $_POST["year1"];
$date2=$_POST["day2"] . "/".$_POST["month2"] . "/".$_POST["year2"];

$check="SELECT * FROM pupils WHERE adm_no='$adm_no'";
$check1=mysqli_query($conn,$check);
if($check){
//Inserts the above data into the specified column in the database.
$query="INSERT INTO lend_books (adm_no, fname, lname, sex, class, book_title, book_code, date1, date2)
VALUES ('{$adm_no}', '{$fname}', '{$lname}', '{$sex}', '{$class}', '{$book_title}', '{$book_code}', '{$date1}', '{$date2}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	$query = "UPDATE books SET availability='0' WHERE book_code  = '$book_code' ";
	$result1=mysqli_query($conn, $query);
	redirect_to("view_books.php?class=general");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}}
else{redirect_to("new_student.php");}
?>