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
$class=$_POST["class"];
$year=$_POST["year"];
$term=$_POST["term"];
$amount=$_POST["amount"];
//Inserts the above data into the specified column in the database.
$query="INSERT INTO paid_fees (adm_no, fname, lname, class, year, term, amount)
VALUES ('{$adm_no}', '{$fname}', '{$lname}', '{$class}', '{$year}', '{$term}', '{$amount}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("view_paid_fees.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>