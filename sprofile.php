<?session_start();
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
	<title> Student Profile</title>
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
						<div class="module-body">
							<div class="profile-head media">
								<a href="#" class="media-avatar pull-left">
									<img src="images/samples/user.png">
								</a>
								<div class="media-body">
									<h4>
										Collins I. Chegero
										<small>Activated </small>
									</h4>
									<p class="profile-brief">
										some Little information about collins which we will pick from the database in the column student description.
									</p>
									<div class="profile-details muted">
										<a href="#" class="btn">
											<i class="icon-plus shaded"></i>
											Add as friend
										</a>
										<a href="#" class="btn">
											<i class="icon-envelope-alt shaded"></i>
											Sed a message
										</a>
									</div>
								</div>
							</div>

							<ul class="profile-tab nav nav-tabs">
								<li class="active"><a href="#editstud" data-toggle="tab"> Edit Student </a></li>
								<li><a href="#performance" data-toggle="tab">Exams Performance</a></li>
								<li><a href="#feepayment" data-toggle="tab">Fee Payment</a></li>
								<li><a href="#library" data-toggle="tab"> Library </a></li>
								<li><a href="#friends" data-toggle="tab">Friends</a></li>
								<li><a href="#biography" data-toggle="tab"> Biography  </a></li>
								<li><a href="#task" data-toggle="tab"> Tasks Responsibility </a></li>
							</ul>
							<div class="profile-tab-content tab-content">
								<div class="tab-pane fade active in" id="editstud">
									<form class="form-horizontal row-fluid" id="newstudentfrm" name="newstudentfrm" method="POST" action="" >
										<div class="control-group">
											<label class="control-label" for="firstname"> First Name </label>
											<div class="controls">
												<input type="text" id="firstname" name="firstname" placeholder="Enter Student's First name" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="middlename"> Middle Name </label>
											<div class="controls">
												<input type="text" id="middlename" name="middlename" placeholder="Enter Student's Middle name" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="lastname"> Last Name </label>
											<div class="controls">
												<input type="text" id="lastname" name="lastname" placeholder="Enter Student's Last name" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label"> Sex </label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="gender" id="gender" value="M" required >
													Male
												</label> 
												<label class="radio inline">
													<input type="radio" name="gender" id="gender" value="F" required >
													Female
												</label>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="address"> Address </label>
											<div class="controls">
												<input type="text" id="address" name="address" placeholder="Enter Where the student stays" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="dob"> Date Of Birth </label>
											<div class="controls">
												<input type="text" id="dob" name="dob" placeholder="Enter Student's Date Of Birth" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="pob"> Place Of Birth </label>
											<div class="controls">
												<input type="text" id="pob" name="pob" placeholder="Enter Student's place of birth" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="class"> Class </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="class" name="class" class="span8">
													<option value="">Select here..</option>
													<option value="One"> One </option>
													<option value="Two">Two</option>
													<option value="Three">Three</option>
													<option value="Four"> Four </option>
													<option value="Five"> Five  </option>
													<option value="Six"> Six </option>
													<option value="Seven"> Seven </option>
													<option value="Eight"> Eight </option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="Term"> Term </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="term" name="term" class="span8">
													<option value="">Select here..</option>
													<option value="One"> One </option>
													<option value="Two">Two</option>
													<option value="Three">Three</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="guardian"> Guardian </label>
											<div class="controls">
												<input type="text" id="guardian" name="gurdian" placeholder="Enter Student's Guardian" required class="span8">
												<span class="help-inline">Please provide name of the person staying with the student currently.</span>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="g_contacts"> Guardian Contacts</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on">+254</span><input class="span8" type="text" id="phone" name="phone" placeholder="Enter phone number" required > &nbsp; &nbsp; <input class="span8" type="email" id="email" name="email" placeholder="Enter email" required >       
												</div>
											</div>
										</div>
										<div class="control-group">
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
										</div>

										<div class="control-group">
											<label class="control-label">Activate Student</label>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="1" id="activate" name="activate">
													Check to activate student
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="description"> Other Student Details</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="description" name="description" ></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" id="newstudent" >Update Student Info</button>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="performance">
								
									<div class="accordion" id="basic-accordion">
										<div class="accordion-group">
											<div class="accordion-heading">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#basic-accordion" href="#collapseOne">
													Class 1 | Term 1 Examination Results
												</a>
											</div>
										</div>
										
										<div id="collapseOne" class="accordion-body in collapse">
											<div class="accordion-inner">
												<div class="module">
													<div class="module-head">
														<h3>Class 1 Term 1 </h3>
													</div>
													<div class="module-body table">
													<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
													<thead>
														<tr>
															<th> Subjects </th>
															<th> Scores </th>
															<th> Grades </th>
															<th> Remarks </th>
															
														</tr>
													</thead>
													<tbody>
														<tr class="even gradeC">
															<td>English</td>
															<td>90 %
																 </td>
															<td> A </td>
															<td class="center"> Excellent </td>
														</tr>
														<tr class="odd gradeX">
															<td> Kiswahili </td>
															<td> 40 %
																 </td>
															<td> C </td>
															<td class="center"> Poor </td>
														</tr>
														
													<tfoot>
														<tr>
															<th>Total Subjects</th>
															<th>Total Scores</th>
															<th>Mean Grade</th>
															<th>General Remarks</th>
														</tr>
													</tfoot>
												</table>
											</div>
										</div><!--/.module-->
											</div>
										</div> <!-- collapse one loop this from the database -->
										
													<div class="accordion-group">
														<div class="accordion-heading">
															<a class="accordion-toggle" data-toggle="collapse" data-parent="#basic-accordion" href="#collapseTwo">
																Class 2 | Term 2 Examination Results
															</a>
														</div>
													</div>
													
													<div id="collapseTwo" class="accordion-body in collapse">
														<div class="accordion-inner">
															results of exams <br/>
															result men </br>
														</div>
													</div> <!-- collapse one -->
													
													
													
												</div> <!-- accordion  -->
											</div>
											
											<div class="tab-pane fade" id="feepayment">
											
												<div class="module">
												<div class="module-head">
													<h3>Tuition Fee Payment</h3>
												</div>
												<div class="module-body table">
												<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
												<thead>
													<tr>
														<th> Class </th>
														<th> Term </th>
														<th> Tuition Fee </th>
														<th> Fee Paid </th>
														<th> Balance </th>
													</tr>
												</thead>
												<tbody>
													<tr class="even gradeC">
														<td>Class One</td>
														<td>Term 1
															 </td>
														<td> Kes. 41, 200. 50 </td>
														<td class="center">Kes. 41, 200.00 </td>
														<td class="center"> Kes. 0.00 </td>
													</tr>
													<tr class="odd gradeX">
														<td> Class One </td>
														<td> Term 2
															 </td>
														<td> Kes. 37, 345.90 </td>
														<td class="center"> 20, 500.00 </td>
														<td class="center"> Kes. 16, 845.90 </td>
													</tr>
													
												<tfoot>
													<tr>
														<th>total class attended</th>
														<th>Total terms attended</th>
														<th>Total Tuition</th>
														<th>Total Paid</th>
														<th>Total Balance</th>
													</tr>
												</tfoot>
											</table>
										</div>
									</div><!--/.module-->
												
												<div class="row-fluid">
										<div class="span6">
											<div class="module">
												<div class="module-head">
													<h3> Other Payments </h3>
												</div>
												<div class="module-body">
													<table class="table table-striped">
														<thead>
															<tr>
															  <th>Type</th>
															  <th>Reason</th>
															  <th>Amount Paid</th>
															  <th>Date Paid</th>
															</tr>
														</thead>
														<tbody>
														  <tr>
															<td><strong>Trip</strong></td>
															<td><strong>Visiting masai mara</strong></td>
															<td><strong>Kes. 3, 400.00</strong></td>
															<td><strong>06/08/2014</strong></td>
														  </tr>
														  <tr>
															<td><strong>Replacement</strong></td>
															<td><strong>Bought new window glasses</strong></td>
															<td><strong>Kes. 920.00 </strong></td>
															<td><strong>06/17/2014</strong></td>
														  </tr>
														
														</tbody>
													</table>
												</div>
											</div>
										</div><!--/.span6-->

										<div class="span6">
											<div class="module">
												<div class="module-head">
													<h3> Payment History </h3>
												</div>
												<div class="module-body table">
													<table class="table table-striped">
														<thead>
															<tr>
															  <th>Payment Type</th>
															  <th> Amount Paid</th>
															  <th> Date Paid</th>
															</tr>
														</thead>
														<tbody>
														  <tr>
															<td>Fee Payment</td>
															<td><strong>Kes. 12,300.00</strong></td>
															<td><strong>04/23/2014</strong></td>
														  </tr>
														  <tr>
															<td>Trip Payment</td>
															<td><strong>Kes. 5, 600</strong></td>
															<td><strong>05/11/2014</strong></td>
														  </tr>
														</tbody>
													</table>
												</div>
											</div>
										</div><!--/.span6-->
									</div><!--/.row-fluid-->
								
								</div> <!-- feepayment -->
										
								
								<div class="tab-pane fade" id="library">								
									
									<div class="module">
												<div class="module-head">
													<h3>Student Library Activities</h3>
												</div>
												<div class="module-body table">
												<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
												<thead>
													<tr>
														<th> Activity </th>
														<th> Data </th>
														<th> Status </th>
														<th> Date </th>
														
													</tr>
												</thead>
												<tbody>
													<tr class="even gradeC">
														<td>Borrow Book</td>
														<td> Borrowed Kiswahili Mufti Textbook
															 </td>
														<td> <span class="label label-danger"> Pending </span> </td>
														<td class="center"> 08/06/2014 </td>
													</tr>
													<tr class="odd gradeX">
														<td> Submit Article </td>
														<td> Article about a research on what causes behaviour in humans
															 </td>
														<td> <span class="label label-danger"> Posted </span> </td>
														<td class="center"> 23/08/2014 </td>
													</tr>
													
												<tfoot>
													<tr>
														<th>Total Activities</th>
														<th> </th>
														<th> </th>
														<th></th>
														
													</tr>
												</tfoot>
											</table>
										</div>
									</div><!--/.module-->
								
								</div>
								
								<div class="tab-pane fade" id="friends">
										<div class="module-option clearfix">
												<form>
													<div class="input-append pull-left">
														<input type="text" class="span3" placeholder="Filter by name...">
														<button type="submit" class="btn"><i class="icon-search"></i></button>
													</div>
												</form>

												<div class="btn-group pull-right" data-toggle="buttons-radio">
													<button type="button" class="btn">All</button>
													<button type="button" class="btn">Male</button>
													<button type="button" class="btn">Female</button>
												</div>
										</div>
										<div class="module-body">

												<div class="row-fluid">
													<div class="span6">
														<div class="media user">
															<a class="media-avatar pull-left" href="#">
																<img src="images/samples/user.png">
															</a>
															<div class="media-body">
																<h3 class="media-title">
																	Ashlee Simpson
																</h3>
																<p><small class="muted">25 / Female / United States</small></p>
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
															<a class="media-avatar pull-left" href="#">
																<img src="images/samples/user.png">
															</a>
															<div class="media-body">
																<h3 class="media-title">Juhi Chawla</h3>
																<p><small class="muted">25 / Female / United States</small></p>
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

												<div class="row-fluid">
													<div class="span6">
														<div class="media user">
															<a class="media-avatar pull-left" href="#">
																<img src="images/samples/user.png">
															</a>
															<div class="media-body">
																<h3 class="media-title">Ashlee Simpson</h3>
																<p><small class="muted">25 / Female / United States</small></p>
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
															<a class="media-avatar pull-left" href="#">
																<img src="images/samples/user.png">
															</a>
															<div class="media-body">
																<h3 class="media-title">Juhi Chawla</h3>
																<p><small class="muted">25 / Female / United States</small></p>
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

												<div class="row-fluid">
													<div class="span6">
														<div class="media user">
															<a class="media-avatar pull-left" href="#">
																<img src="images/samples/user.png">
															</a>
															<div class="media-body">
																<h3 class="media-title">Ashlee Simpson</h3>
																<p><small class="muted">25 / Female / United States</small></p>
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
															<a class="media-avatar pull-left" href="#">
																<img src="images/samples/user.png">
															</a>
															<div class="media-body">
																<h3 class="media-title">Juhi Chawla</h3>
																<p><small class="muted">25 / Female / United States</small></p>
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

												<div class="row-fluid">
													<div class="span6">
														<div class="media user">
															<a class="media-avatar pull-left" href="#">
																<img src="images/samples/user.png">
															</a>
															<div class="media-body">
																<h3 class="media-title">Ashlee Simpson</h3>
																<p><small class="muted">25 / Female / United States</small></p>
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
															<a class="media-avatar pull-left" href="#">
																<img src="images/samples/user.png">
															</a>
															<div class="media-body">
																<h3 class="media-title">Juhi Chawla</h3>
																<p><small class="muted">25 / Female / United States</small></p>
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
								<div class="tab-pane fade" id="biography">
									<h5>My self-summary</h5>
									<p>I just moved to KL for my job and am looking for new people to hang out with.</p>

									<hr>

									<h5>What I’m doing with my life</h5>
									<p>I am a Guest Service Agent at an upscale hotel.</p>

									<hr />

									<h5>I’m really good at</h5>
									<p>Being a good friend and listening.</p>

									<hr />

									<h5>The first things people usually notice about me</h5>
									<p>My energy. I am extremely hyper and I talk A LOT, sometimes I don't even know what I am saying. I guess my eyes are pretty distinctive.</p>

									<hr />

									<h5>Favorite books, movies, shows, music, and food</h5>
									<p>My interests jump around a lot, basically I read/watch anything that's available However I am currently reading "The Zombie Survival Guide" by Max Brooks. Last week it was a romance novel by Lisa Kleypas. Go figure.</p>

									<hr />

									<h5>I spend a lot of time thinking about</h5>
									<p>The future. Where I am going to be and who I will be with.</p>

									<hr />

									<h5>On a typical Friday night I am</h5>
									<p>Watching movies on my laptop or surfing Reddit. I know I lame.</p>

									<hr />

									<h5>The most private thing I’m willing to admit</h5>
									<p>I suck my thumb. And i also have a blankie to accompany the thumb-sucking. There is no end to my sexiness.</p>
								</div>
								<div class="tab-pane fade" id="task">
									<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
								</div>
							</div>
						</div><!--/.module-body-->
					</div><!--/.module-->
						
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