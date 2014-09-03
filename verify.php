<?php
require_once("includes/functions.php");
session_start();

//Connecting to a database
include("includes/db_connect.php");

$uname=$_POST["username"];
$pass=$_POST["password"];
$password=md5($pass);



//query request to database 
$query="SELECT * FROM users WHERE username = '$uname' AND password = '$password'";
$result=mysqli_query($conn, $query);


if(!$result){
	echo "ERROR!! ";
}

$user=mysqli_fetch_assoc($result);

if(is_array($user) && !empty($user)){
	$validuser=$user["username"];
	$usertype= $user["user_type"];
	$_SESSION['valid']=$validuser;
	$_SESSION['user_type']=$usertype;
}
else{
	redirect_to("login.php");
	echo "wrong username or password!!";
}


if(isset($_SESSION['valid']))
	{
		redirect_to("index.php");
	}
?>