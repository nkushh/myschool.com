<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$username=$_POST["username"];
$sex=$_POST["sex"];
$telephone=$_POST["phone_no"];
$email=$_POST["email"];
$usertype=$_POST["user_type"];
$password=$_POST["password"];
$encryptpass=md5($password);
//Inserts the above data into the specified column in the database.
$query="UPDATE users SET fname='$fname', lname='$lname', username='$username', sex='$sex', phone_no='$telephone', email='$email', user_type='$usertype', password='$encryptpass' WHERE id='$id'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("manageusers.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>