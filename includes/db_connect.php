<?php
require_once("functions.php");
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="ccm";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//Checks to see whether the database connection was successful.
if(mysqli_connect_errno()){
	die("Database connection failed!! ".mysqli_connect_error());
}
?>