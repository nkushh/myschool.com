<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$surname=$_POST["surname"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$sex=$_POST["sex"];
$dob=$_POST["day"] ."/". $_POST["month"] ."/". $_POST["year"];
$class=$_POST["class"];
$term=$_POST["term"];
$doe=$_POST["day1"] ."/". $_POST["month1"] ."/". $_POST["year1"];
$guardian=$_POST["g_name"];
$telephone=$_POST["phone_no"];
$email=$_POST["email"];
$adm_no=$_POST["adm_no"];
//Inserts the above data into the specified column in the database.
$query="INSERT INTO pupils (surname, fname, lname, sex, dob, class, term, doe, g_name, phone_no, email, adm_no )
VALUES ('{$surname}', '{$fname}', '{$lname}', '{$sex}', '{$dob}', '{$class}', '{$term}', '{$doe}', '{$guardian}', '{$telephone}', '{$email}', '{$adm_no}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("liststudents.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>