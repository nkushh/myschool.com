<?php require_once("includes/functions.php");?>
<?php session_start();
$valid=$_SESSION['valid'];
if(!$valid || $valid=="")
	{
		redirect_to("login.php");
	}?>
<?php include("includes/db_connect.php");?>
<?php
$books=$_GET["class"];
require_once("includes/books_loop.php");
$one = 1;
$two= 2;
$three=3;
$four= 4;
$five=5;
$six=6;
$seven=7;
$eight=8;
$general=general; 
?>
<!DOCTYPE html>
<html lang="en"><head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Books</title>
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
							<h4>Search by category</h4>
						</a></li>
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
						<div class="module">
							<div class="module-head">
								<h3> List of books</h3>
							</div>
							
							<div class="module-body table">
							<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Heads Up!</strong> You are currently viewing books in list view. You can switch to <a href="sprofiles.php" >Profile View </a>

									</div>
									  <p>&nbsp &nbsp Class 
										       <a href='view_books.php?class=<?echo $one;?>'class="btn btn-mini btn-success">One</a>&nbsp
										       <a href='view_books.php?class=<?echo $two;?>'class="btn btn-mini btn-success">Two</a>&nbsp
												<a href='view_books.php?class=<?echo $three;?>'class="btn btn-mini btn-success">Three</a>&nbsp
												<a href='view_books.php?class=<?echo $four;?>'class="btn btn-mini btn-success">Four</a>&nbsp
												<a href='view_books.php?class=<?echo $five;?>'class="btn btn-mini btn-success">Five</a>&nbsp
												<a href='view_books.php?class=<?echo $six;?>'class="btn btn-mini btn-success">Six</a>&nbsp
												<a href='view_books.php?class=<?echo $seven;?>'class="btn btn-mini btn-success">Seven</a>&nbsp
												<a href='view_books.php?class=<?echo $eight;?>'class="btn btn-mini btn-success">Eight</a>&nbsp
												<a href='view_books.php?class=<?echo $general;?>'class="btn btn-mini btn-success">General</a>&nbsp</p>
								<?php	
								echo "<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"datatable-1 table table-bordered table-striped	 display\" width=\"100%\">";
									echo "<thead>";
										echo "<tr>";
										    echo "<th>No</th>";
											echo "<th> Book Name </th>";
											echo "<th> Author </th>";
											echo "<th> Book Code </th>";
											echo "<th> Category </th>";
											echo "<th> Class </th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
									while($book=mysqli_fetch_assoc($result)){
										echo "<tr class=\"odd gradeX\">";
											echo "<td>".$book["id"]."</td>";
											echo "<td>".$book["book_name"]."</td>";
											echo "<td>".$book["author"]."</td>";
											echo "<td>".$book["book_code"]."</td>";
											echo "<td>".$book["category"]."</td>";
											echo "<td>".$book["class"]."</td>";
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