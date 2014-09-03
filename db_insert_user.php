<?php
require_once("includes/functions.php");
require_once("includes/db_connect.php");
?>
<?php
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
$query="INSERT INTO users (fname, lname, username, sex, phone_no, email, user_type, password)
VALUES ('{$fname}', '{$lname}', '{$username}', '{$sex}', '{$telephone}', '{$email}', '{$usertype}', '{$encryptpass}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("manageusers.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>