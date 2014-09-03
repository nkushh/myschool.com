<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$id=$_POST["id"];
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
$query="UPDATE pupils SET surname='$surname', fname='$fname', lname='$lname', sex='$sex', dob='$dob', class='$class', term='$term', doe='$doe', g_name='$guardian', phone_no='$telephone', email='$email', adm_no='$adm_no' WHERE id='$id'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("liststudents.php?class=1");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>