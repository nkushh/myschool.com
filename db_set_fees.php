<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$class=$_POST["class"];
$term=$_POST["term"];
$year=$_POST["year"];
$fee=$_POST["fee"];


//Inserts the above data into the specified column in the database.
$query="INSERT INTO fee_structure (class, term, year, fee)
VALUES ('{$class}', '{$term}', '{$year}', '{$fee}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("view_fee_structure.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>