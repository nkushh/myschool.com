<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$dept_name=$_POST["dept_name"];
$hod=$_POST["hod"];
$nom=$_POST["no_of_teachers"];
$speciality=$_POST["speciality"];
$contacts=$_POST["contacts"];
$email=$_POST["email"];

//Inserts the above data into the specified column in the database.
$query="INSERT INTO departments (dept_name, hod, no_of_teachers, speciality, contacts, email)
VALUES ('{$dept_name}', '{$hod}', '{$nom}', '{$speciality}', '{$contacts}', '{$email}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("ldepartments.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>