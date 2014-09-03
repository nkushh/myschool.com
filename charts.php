<?php require_once("includes/functions.php");?>
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
	<title>Chart Reports</title>
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

			  <?php include ("includes/sitename.php"); ?>

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
				
					<?php include ("includes/sidebarnav.php"); ?>

				<div class="span9">
					<div class="content">

						<div class="module"><div class="module-head"><h3>Chart - flot</h3></div><div class="module-body">
								<div class="chart">
									<div id="placeholder" class="graph"></div>
								</div>
						</div></div><!--/.module-->

						<br />

						<div class="module"><div class="module-head"><h3>Chart - flot</h3></div><div class="module-body">
								<div class="chart inline-legend grid">
									<div id="placeholder2" class="graph"></div>
								</div>
						</div></div><!--/.module-->

						<br />

						<div class="module"><div class="module-head"><h3>Pie - Default</h3></div><div class="module-body">
								<div class="chart pie donut">
									<div id="pie-default" class="graph"></div>
								</div>
						</div></div><!--/.module-->

						<br />

						<div class="module"><div class="module-head"><h3>Pie - Donut</h3></div><div class="module-body">
								<div class="chart pie donut">
									<div id="pie-donut" class="graph"></div>
								</div>
						</div></div><!--/.module-->

						<br />

						<div class="module"><div class="module-head"><h3>Pie - Donut & Interactive</h3></div><div class="module-body">
								<div class="chart pie donut interactive">
									<div id="pie-interactive" class="graph"></div>
									<div id="hover"></div>
								</div>
						</div></div><!--/.module-->
						
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
	<script src="scripts/flot/jquery.flot.pie.js"></script>
	<script src="scripts/flot/jquery.flot.resize.js"></script>

	<!-- SCRIPTS: FLOT GRAPH BASIC -->
	<script type="text/javascript">
	$(function () {
		var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
		var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

		var plot = $.plot($("#placeholder"), 
		[ { data: d1, label: "Data A" }, { data: d2, label: "Data B" } ], {
			lines: { 
				show: true, 
				fill: false, 
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
	});
	</script>

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

	<!-- SCRIPTS: CHARTS -->
	<script>
		// PREDEFINED DATA
		var data = [
						{ label: "Series1",  data: [[1,10]]},
						{ label: "Series2",  data: [[1,30]]},
						{ label: "Series3",  data: [[1,90]]}
					];

		// DEFAULT
		$.plot($("#pie-default"), data, 
		{
			series: {
				pie: { 
					show: true
				}
			}
		});

		// DEFINE ACTIONS FOR pieHover & pieClick
		function pieHover(event, pos, obj) 
		{
			if (!obj)
						return;
			percent = parseFloat(obj.series.percent).toFixed(2);
			$("#hover").html('<span>'+obj.series.label+' - '+percent+'%</span>');
		}

		function pieClick(event, pos, obj) 
		{
			if (!obj)
						return;
			percent = parseFloat(obj.series.percent).toFixed(2);
			alert(''+obj.series.label+': '+percent+'%');
		}

		// DONUT
		$.plot($("#pie-donut"), data, 
		{
			series: {
				pie: { 
					innerRadius: 50,
					show: true
				}
			}
		});

		// DONUT + INTERACTIVE
		$.plot($("#pie-interactive"), data,
		{
				series: {
					pie: {
						innerRadius: 50,
						show: true
					}
				},
				grid: {
					hoverable: true,
					clickable: true
				}
		});

		$("#pie-interactive").bind("plothover", pieHover);
		$("#pie-interactive").bind("plotclick", pieClick);
	</script>
</body>