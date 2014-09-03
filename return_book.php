<?php session_start();
$valid=$_SESSION['valid'];
if(!$valid || $valid=="")
	{
		redirect_to("login.php");
	}?>
	<?php include("includes/db_connect.php");?>
<?php
$query="SELECT * FROM lend_books WHERE status='0'";
$result=mysqli_query($conn,$query);
//checks for query errors!!
if(!result){
	die("DB query failed".mysqli_error());
}
$return=1;
?>
<!DOCTYPE html>
<html lang="en"><head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Return lend books </title>
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
						</a></li>
						<li><a href="#">
							<i class="icon-tasks shaded"></i>
						</a></li>-->
					</ul>

					<form class="navbar-search pull-left input-append" action="">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<?php include "includes/sidebarnav.php"; ?>

				<div class="span9">
					<div class="content">
					
					<div class="btn-group pull-right" data-toggle="buttons-radio">
										<a href="lend_book.php" role="button" class="btn btn-primary">Lend Book</a>
									</div>
						
						<div class="module">
							<div class="module-head">
								<h3> Manage Lend Books </h3>
							</div>
							<div class="module-body table">
								<?php
								echo "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"datatable-1 table table-bordered table-striped	 display\" width=\"100%\">";
									echo "<thead>";
										echo "<tr>";
										    echo "<th> Adm No </th>";
											echo "<th> Full Name </th>";
											echo "<th> Class </th>";
											echo "<th> Book </th>";
											echo "<th> Book code </th>";
											echo "<th> Borrow date </th>";
											echo "<th> Return date </th>";
											echo "<th> Action </th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
									while($return_book=mysqli_fetch_assoc($result)){
										echo "<tr class=\"odd gradeX\">";
											echo "<td>".$return_book["adm_no"]."</td>";
											echo "<td>".$return_book["fname"]."&nbsp".$return_book["lname"]."</td>";
											echo "<td>".$return_book["class"]."</td>";
											echo "<td>".$return_book["book_title"]."</td>";
											echo "<td>".$return_book["book_code"]."</td>";
											echo "<td>".$return_book["date1"]."</td>";
											echo "<td>".$return_book["date2"]."</td>";?>
											<td><a href="db_return_book.php?book_code=<?php echo $return_book["book_code"];?>"><?php echo "Return"."</td>";
											echo "</tr>";}
								echo "</table>";?>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

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