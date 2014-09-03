<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$adm_no=$_POST["adm_no"];
$class=$_POST["class"];
$term=$_POST["term"];
$exam_type=$_POST["exam_type"];
$english=$_POST["english"];
$kiswahili=$_POST["kiswahili"];
$mathematics=$_POST["mathematics"];
$science=$_POST["science"];
$social_studies=$_POST["social_studies"];

//Inserts the above data into the specified column in the database.
$query="INSERT INTO exam_results (adm_no, class, term, exam_type, english, kiswahili, mathematics, science, social_studies)
VALUES ('{$adm_no}', '{$class}', '{$term}', '{$exam_type}', '{$english}', '{$kiswahili}', '{$mathematics}', '{$science}', '{$social_studies}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("view_pupil_results.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>