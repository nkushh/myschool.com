<?php
require_once("includes/functions.php");?>
<?php	
//Connecting to a database
	include("includes/db_connect.php");
?>
<?php
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$sex=$_POST["sex"];
$id_number=$_POST["id_number"];
$telephone=$_POST["phone_no"];
$email=$_POST["email"];
$dept=$_POST["dept"];
 if(isset($_POST['subjects']))
          {
	       $subjects=array();
	         foreach ($_POST['subjects'] as $_boxValue)
	                {
					 //echo $_boxValue."\t";
					$subjects[]= array('subject'=>$_boxValue);	
		                } 
		              }
		//print_r ($subjects);
		$other_subjects=json_encode($subjects);
//Inserts the above data into the specified column in the database.
$query="INSERT INTO teachers (fname, mname, lname, sex, id_number, phone_no, email, dept, subjects)
VALUES ('{$fname}', '{$mname}', '{$lname}', '{$sex}', '{$telephone}', '{$email}', '{$dept}', '{$other_subjects}')";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if($result){
	redirect_to("lteachers.php");
	echo "Data successfully sent";
}else{
	die("Data could not be sent! ".mysqli_error($conn));
}
?>