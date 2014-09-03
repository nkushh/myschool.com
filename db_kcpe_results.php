<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$names=$_POST["names"];
$adm_no=$_POST["adm_no"];
$index_no=$_POST["index_no"];
$sex=$_POST["sex"];
$year=$_POST["year"];
$english=$_POST["english"];
$kiswahili=$_POST["kiswahili"];
$mathematics=$_POST["mathematics"];
$science=$_POST["science"];
$social_studies=$_POST["social_studies"];
$total_marks=$_POST["english"]+$_POST["kiswahili"]+$_POST["mathematics"]+$_POST["science"]+$_POST["social_studies"];
$mean_grade=$_POST["mean_grade"];
//Inserts the above data into the specified column in the database.
$query="INSERT INTO kcpe_results (names, adm_no, index_no, sex, year , english, kiswahili, mathematics, science, social_studies, total_marks, mean_grade)
VALUES ('{$names}','{$adm_no}', '{$index_no}', '{$sex}', '{$year}', '{$english}', '{$kiswahili}', '{$mathematics}', '{$science}', '{$social_studies}',  '{$total_marks}', '{$mean_grade}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("view_kcpe_results.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>