<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$event_name=$_POST["event_name"];
$term=$_POST["term"];
$details=$_POST["details"];
$dates=$_POST["day"] ."/". $_POST["month"] ."/". $_POST["year"];
//Inserts the above data into the specified column in the database.
$query="INSERT INTO events (event_name, term, details, dates)
VALUES ('{$event_name}', '{$term}', '{$details}', '{$dates}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("view_events.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>