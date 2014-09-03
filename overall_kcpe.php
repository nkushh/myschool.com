<?php require_once("includes/functions.php");?>
<?php session_start();
$valid=$_SESSION['valid'];
if(!$valid || $valid=="")
	{
		redirect_to("login.php");
	}?>
<?php include("includes/db_connect.php");?>
<?php
$query="SELECT AVG(english), AVG(kiswahili), AVG(mathematics), AVG(science), AVG(social_studies), AVG(total_marks) FROM kcpe_results WHERE year='2004' ORDER BY id";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}
?>
<!DOCTYPE html>
<html lang="en"><head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Overall KCPE results</title>
	<!-- STYLES: BOOTSTRAPS -->
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<!-- STYLES: THEMES -->
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="css/theme-responsive-767.css" rel="stylesheet">
	<link type="text/css" href="css/theme-responsive-768-979.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<!--FONTS-->
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
				<?php include "includes/sitename.php"; ?>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<!--<li class="active"><a href="#">
							<i class="icon-group shaded"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-inbox shaded"></i>
						</a></li>-->
						<li><a href="#">
							<h4>Search by year</h4>
						</a></li>
					</ul>

					<form class="navbar-search pull-left input-append" method="POST" action="overall_kcpe.php">
						<input type="text" name="year" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<?php include "includes/sidebarnav.php"; ?>


				<div class="span9">
					<div class="content">
						<div class="btn-group pull-right" data-toggle="buttons-radio">
										<a href="view_kcpe_results.php" role="button" class="btn btn-primary" >kcpe results</a>
									</div>
						<div class="module">
							<div class="module-head">
								<h3> Overall KCPE results</h3>
							</div>
							
							<div class="module-body table">
							<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Heads Up!</strong> You are currently viewing Overall KCPE results.
									</div>
								<?php	
								echo "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"datatable-1 table table-bordered table-striped	 display\" width=\"100%\">";
									echo "<thead>";
										echo "<tr>";
											echo "<th> Year </th>";
											echo "<th> English </th>";
											echo "<th> Kiswahili </th>";
											echo "<th> Maths </th>";
											echo "<th> Science </th>";
											echo "<th> Social studies </th>";
											echo "<th> Total marks</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
									while($kcpe_results=mysqli_fetch_assoc($result)){
										echo "<tr class=\"odd gradeX\">";
											echo "<td>".$kcpe_results["year"]."</td>";
											echo "<td>".$kcpe_results["english"]."</td>";
											echo "<td>".$kcpe_results["kiswahili"]."</td>";
											echo "<td>".$kcpe_results["mathematics"]."</td>";
											echo "<td>".$kcpe_results["science"]."</td>";
											echo "<td>".$kcpe_results["social_studies"]."</td>";
											echo "<td>".$kcpe_results["total_marks"]."</td>";
										 echo "</tr>";}
										/*echo "<tr class=\"odd gradeX\">";
										echo "<td>N/A</td>";
										echo "<td>N/A</td>";
										echo "<td>N/A</td>";
										echo "<td>"?>
											<? include("includes/get_mean.php");?>
											<?echo "</td>";*/
								echo "</table>";?>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	?>
	<?php include "includes/footer.php"; ?>

	<!-- SCRIPTS: BASE -->
	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<!-- SCRIPTS: DATATABLES -->
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>