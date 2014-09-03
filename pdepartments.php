<?php session_start();
$valid=$_SESSION['valid'];
if(!$valid || $valid=="")
	{
		redirect_to("login.php");
	}?>
<!DOCTYPE html>
<html lang="en"><head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List Of Departments</title>
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
						<li class="active"><a href="#">
							<i class="icon-group shaded"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-inbox shaded"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-tasks shaded"></i>
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
								<h3>Departments</h3>
							</div>
							<div class="module-option clearfix">
							<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Heads Up!</strong> You are currently viewing Departments in profile view. You can switch to <a href="ldepartments.php" >List View </a>
									</div>
									<form>
										<div class="input-append pull-left">
											<input type="text" class="span3" placeholder="Filter by name...">
											<button type="submit" class="btn"><i class="icon-search"></i></button>
										</div>
									</form>

									<div class="btn-group pull-right" data-toggle="buttons-radio">
										<a href="#myModaldep" role="button" class="btn btn-primary" data-toggle="modal">Create Department</a>
									</div>
							</div>
							<div class="module-body">

									<div class="row-fluid">
										<div class="span6">
											<div class="media user">
												<a class="media-avatar pull-left" href="sprofile.php">
													<img src="images/samples/user.png">
												</a>
												<div class="media-body">
													<h3 class="media-title">
														IT Department
													</h3>
													<p><small class="muted">Department Head : Eric Otieno <br/> Teachers in Department : 6 <br/>Department Speciality : Computer Training and maintenance. <br/> Date Department Created : 08/06/2014 </small></p>
													<div class="media-option btn-group shaded-icon">
														<button class="btn btn-small">
															<i class="icon-envelope-alt"></i>
														</button>
														<button class="btn btn-small">
															<i class="icon-tasks"></i>
														</button>
														<button class="btn btn-small">
															<i class="icon-group"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="span6">
											<div class="media user">
												<a class="media-avatar pull-left" href="sprofile.php">
													<img src="images/samples/user.png" alt="image of the name of head of department">
												</a>
												<div class="media-body">
													<h3 class="media-title">
													 Sciences Department
													</h3>
													<p><small class="muted">Department Head : Piero Muguna <br/> Teachers in Department : 17 <br/> Department Speciality: Research in Environment <br/> Date Department Created : 08/06/2014 </small></p>
													<div class="media-option btn-group shaded-icon">
														<button class="btn btn-small">
															<i class="icon-envelope-alt"></i>
														</button>
														<button class="btn btn-small">
															<i class="icon-tasks"></i>
														</button>
														<button class="btn btn-small">
															<i class="icon-group"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div><!--/.row-fluid-->

									<br />

									<br />

									<div class="pagination pagination-centered">
										<ul>
											<li><a href="#"><i class="icon-double-angle-left"></i></a></li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="icon-double-angle-right"></i></a></li>
										</ul>
									</div>
							</div>
						</div>
						
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

	<!-- SCRIPTS: FLOT  -->
	<script src="scripts/flot/jquery.flot.js"></script>

	<!-- SCRIPTS: FLOT GRAPH ADVANCE -->
	<script type="text/javascript">
	$(function () {
		var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
		var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

		var plot = $.plot($("#placeholder2"),
			   [ { data: d1, label: "Data Y"}, { data: d2, label: "Data X" } ], {
					lines: { 
						show: true, 
						fill: true, /*SWITCHED*/
						lineWidth: 2 
					},
					points: { 
						show: true, 
						lineWidth: 5 
					},
					grid: {
						clickable: true,
						hoverable: true,
						autoHighlight: true,
						mouseActiveRadius: 10,
						aboveData: true,
						backgroundColor: "#fafafa",
						borderWidth: 0,
						minBorderMargin: 25,
					},
					colors: [ "#090", "#099",  "#609", "#900"],
					shadowSize: 0
				 });

		function showTooltip(x, y, contents) {
			$('<div id="gridtip">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(300);
		}

		var previousPoint = null;
		$("#placeholder2").bind("plothover", function (event, pos, item) {
			$("#x").text(pos.x.toFixed(2));
			$("#y").text(pos.y.toFixed(2));

			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
					
					$("#gridtip").remove();
					var x = item.datapoint[0].toFixed(0),
						y = item.datapoint[1].toFixed(0);
					
					showTooltip(item.pageX, item.pageY,
								"x : " + x + "&nbsp;&nbsp;&nbsp; y : " + y);
				}
			}
			else {
				$("#gridtip").remove();
				previousPoint = null;            
			}
		});
	});
	</script>

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
	<script>
	$(function() {
		$( ".slider-range" ).slider({
			range: true,
			min: 0,
			max: 20000,
			values: [ 3000, 12000 ],
			// $(this).find('.ui-slider-handle:first-child').addClass("first-handle");
			// slide: function( event, ui ) {
			// 	$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	  // 		}
	  // 	
			slide: function(event, ui) {
				$(this).find('.ui-slider-handle').attr("title", ui.value);
			},
		});
		$( "#amount" ).val( "$" + $( ".slider-range" ).slider( "values", 0 ) + " - $" + $( ".slider-range" ).slider( "values", 1 ) );

	});
	</script>
</body>