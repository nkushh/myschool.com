<?php require_once("includes/functions.php");?>
<?php include("includes/db_connect.php");?>
<?php
$id=$_GET["id"];
$query="DELETE FROM users WHERE id='$id'";
$result=mysqli_query($conn, $query);

//Checks for query errors.
if($result){
	redirect_to("manageusers.php");
}else{
	die("Error".mysqli_error($conn));
} 
?>