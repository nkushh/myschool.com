<?php require_once("includes/functions.php");?>
<?php session_start();
$usertype=$_SESSION['user_type'];
if($usertype !="Administrator"){
	redirect_to("login.php");
}
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
	<title>Add New Student</title>
	<!-- STYLES: BOOTSTRAPS -->
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<!-- STYLES: THEMES -->
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="css/theme-responsive-767.css" rel="stylesheet">
	<link type="text/css" href="css/theme-responsive-768-979.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<!-- REDACTOR EDITOR -->
	<link rel="stylesheet" href="scripts/redactor/redactor.css" />
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
				
					<!-- Sidebar Navigation & top right conner links-->
			<?php include "includes/sidebarnav.php"; ?>

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3> Enter Student Information </h3>
							</div>
							<div class="module-body">

									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> You are doing something wrong with the system and that could be problematic .
									</div>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Something went wrong and we could not complete the action you triggered . 
									</div>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Done!</strong> You have successfully added new student. 
									</div>

									<br />

									<form class="form-horizontal row-fluid" id="newstudentfrm" name="newstudentfrm" method="POST" action="db_insert_studs.php" >
										<div class="control-group">
											<label class="control-label" for="firstname"> Surname </label>
											<div class="controls">
												<input type="text" id="surname" name="surname" placeholder="Enter Student's surname" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="middlename"> First Name </label>
											<div class="controls">
												<input type="text" id="fname" name="fname" placeholder="Enter Student's First name" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="lastname"> Last Name </label>
											<div class="controls">
																<input type="text" id="lname" name="lname" placeholder="Enter Student's Last name" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label"> Sex </label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="sex" id="gender" value="male" required >
													Male
												</label> 
												<label class="radio inline">
													<input type="radio" name="sex" id="gender" value="female" required >
													Female
												</label>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="dob"> Date Of Birth </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="day" name="day" class="span8">
													<?php echo days();?>
												</select><br><br>
												<select tabindex="1" data-placeholder="Select here.." id="month" name="month" class="span8">
													<?php echo months();?>
												</select><br><br>
												<select tabindex="1" data-placeholder="Select here.." id="year" name="year" class="span8">
													<?php echo years();?>
												</select>
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="class"> Class </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="class" name="class" class="span8">
													<?php echo classes();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="Term"> Term </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="term" name="term" class="span8">
													<?php echo terms();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="doe"> Date Of enrollment </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="day1" name="day1" class="span8">
													<?php echo days();?>
												</select><br><br>
												<select tabindex="1" data-placeholder="Select here.." id="month1" name="month1" class="span8">
													<?php echo months();?>
												</select><br><br>
												<select tabindex="1" data-placeholder="Select here.." id="year1" name="year1" class="span8">
													<?php echo years();?>
												</select>
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="address"> Adm No </label>
											<div class="controls">
												<input type="text" id="adm_no" name="adm_no" placeholder="Enter student's admission number" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="guardian"> Guardian </label>
											<div class="controls">
												<input type="text" id="g_name" name="g_name" placeholder="Enter Student's Guardian" required class="span8">
												<span class="help-inline">Please provide name of the person staying with the student currently.</span>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="g_contacts"> Guardian Contacts</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on">+254</span><input class="span8" type="text" id="phone" name="phone_no" placeholder="Enter phone number" required > &nbsp; &nbsp; <input class="span8" type="email" id="email" name="email" placeholder="Enter email" required >       
												</div>
											</div>
										</div>
										<!--<div class="control-group">
											<label class="control-label"> Scholarship </label>
											<div class="controls">
												<label class="radio">
													<input type="radio" name="scholarship" id="scholarship" value="Self Sponsored" checked="">
													Self Sponsored
												</label> 
												<label class="radio">
													<input type="radio" name="scholarship" id="scholarship" value="Bursary">
													Bursary
												</label> 
												<label class="radio">
													<input type="radio" name="scholarship" id="scholarship" value="Sponsored">
													Sponsored
												</label>
											</div>
										</div>-->

										<!--<div class="control-group">
											<label class="control-label">Activate Student</label>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="1" id="activate" name="activate">
													Check to activate student
												</label>
											</div>
										</div>

										<!--<div class="control-group">
											<label class="control-label" for="description"> Other Student Details</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="description" name="description" ></textarea>
											</div>
										</div>-->

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" id="newstudent" >Save Student Info</button>
											</div>
										</div>
									</form>
							</div>
						</div>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<!-- Footer widget -->
	<?php include "includes/footer.php"; ?>

	<!-- SCRIPTS: BASE -->
	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<!-- SCRIPTS: FLOT  -->
	<script src="scripts/flot/jquery.flot.js"></script>

	<!-- SCRIPTS: REDACTOR -->
	<script src="scripts/redactor/redactor.min.js"></script>

	<!-- SCRIPTS: FLOT GRAPH ADVANCE -->
	<script type="text/javascript">
	$(function () {

		if( $("#placeholder2").lenght > 0 ){
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
		}
	});
	</script>

	<!-- SCRIPTS: DATATABLES -->
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			// Activate dataTable plugin
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');

			// Activate redactor editor
			$('#redactor').redactor({
				focus: true
			});
			
			//hide notifications
			$(".alert").hide();
			$(".alert alert-error").hide();
			$(".alert alert-success").hide();
			

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