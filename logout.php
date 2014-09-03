<?php require_once("includes/functions.php");?>
<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	redirect_to("Location:login.php");
	}
	//start and destorying session
	session_start();
	session_destroy();
	//location is on index.php after logout
	header("Location:login.php");
?>