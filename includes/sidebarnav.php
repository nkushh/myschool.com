<?php
require_once("includes/functions.php");?>
<?php session_start(); 
   $usertype=$_SESSION['user_type'];
$usernme=$_POST["username"]; 
?>
<ul class="nav pull-right">
	<?php	if($usertype == "Administrator"):?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">Admin Options </font><b class="caret"></b></a>
							<ul class="dropdown-menu">
							
									<li><a href="add_user.php">Add Users</a></li>
									<li><a href="manageusers.php">Manage Users</a></li>
									<!--<li><a href="audit_trail.php">Audit Trail</a></li>
									<!--<li class="divider"></li>
									<li class="nav-header">System Settings</li>
									<li><a href="#"> System Utilities </a></li>
									<li><a href="#"> System Configuration </a></li>-->

								</ul>
							</li>
							<?php else:?>
							<?php endif;?>
							
						<!--<li><a href="#">
							Help
						</a></li>
						<li><a href="#">
							Report
						</a></li>-->
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/samples/user.png" class="nav-avatar" />
								<font color="white"><? echo $usernme;?> </font>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="sprofile.php">Your Profile</a></li>
								<!--<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>-->
								<li class="divider"></li>
								<li><a href="logout.php">Sign Out</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				

<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.php">
									<i class="menu-icon icon-dashboard"></i>
									Home
								</a>
							</li>
							<!--<li>
								<a href="activities.php">
									<i class="menu-icon icon-bullhorn"></i>
									Activity Stream
								</a>
							</li>
							<li>
								<a href="message.html">
									<i class="menu-icon icon-inbox"></i>
									Message
									<b class="label green pull-right"></b>
								</a>
							</li>

							<li>
								<a href="task.html">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right"></b>
								</a>
							</li>-->
						</ul><!--/.widget-nav-->
						<!-- school -->
						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#accords">
									<i class="menu-icon icon-group"></i> 
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Students
									<b class="label blue pull-right"></b>
								</a>
								<ul id="accords" class="collapse unstyled">
									<?php	if($usertype == "Administrator"):?>
									<li>
										<a href="newstudent.php">
											<i class="icon-inbox"></i>
											Add New Student
										</a>
									</li>
									<?php else:?>
									<?php endif;?>
									<li>
										<a href="liststudents.php?class=1">
											<i class="icon-inbox"></i>
											View Students
											<b class="label blue pull-right"></b>
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a class="collapsed" data-toggle="collapse" href="#accordt">
									<i class="menu-icon icon-group"></i> 
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Teachers
									<b class="label blue pull-right"></b>
								</a>
								<ul id="accordt" class="collapse unstyled">
									<?php	if($usertype == "Administrator"):?>
									<li>
										<a href="nteacher.php">
											<i class="icon-inbox"></i>
											Add New Teacher
										</a>
									</li>
									<?php else:?>
									<?php endif;?>
									<li>
										<a href="lteachers.php">
											<i class="icon-inbox"></i>
											View Teachers
											<b class="label blue pull-right"></b>
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="ldepartments.php">
									<i class="menu-icon icon-table"></i>
									Departments
									<b class="label orange pull-right"></b>
								</a>
							</li>
							<li>
								<a href="view_events.php">
									<i class="menu-icon icon-table"></i>
									Events
									<b class="label orange pull-right"></b>
								</a>
							</li>
							
							<li>
								<a class="collapsed" data-toggle="collapse" href="#accordr">
									<i class="menu-icon icon-bar-chart"></i> 
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Reports
								</a>
								<ul id="accordr" class="collapse unstyled">
									<li>
										<a href="">
											<i class="icon-inbox"></i>
											Printable Reports
										</a>
									</li>
									<li>
										<a href="charts.php">
											<i class="icon-inbox"></i>
											Chart Reports
										</a>
									</li>
								</ul>
							</li>
						</ul><!--/.widget-nav-->

						<!-- exams -->
						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages1">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Examinations 
								</a>
								<ul id="togglePages1" class="collapse unstyled">
									<li>
										<a href="add_pupil_results.php">
											<i class="icon-inbox"></i>
											Enter pupil Grades
										</a>
									</li>
									<li>
										<a href="view_pupil_results.php">
											<i class="icon-inbox"></i>
											View pupil Grades
										</a>
									</li>
									<li>
										<a href="">
											<i class="icon-inbox"></i>
											Filter pupil Grades
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="add_kcpe_results.php">
									<i class="menu-icon icon-table"></i>
									Add KCPE Results
									<b class="label orange pull-right"></b>
								</a>
							</li>
							<li>
								<a href="view_kcpe_results.php">
									<i class="menu-icon icon-table"></i>
									View KCPE Results
									<b class="label orange pull-right"></b>
								</a>
							</li>
						</ul>	
						
						
						<!-- Finance -->
						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages2">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									School Finance
								</a>
								<ul id="togglePages2" class="collapse unstyled">
									<?php	if($usertype == "Administrator"):?>
									<li>
										<a href="set_fees.php">
											<i class="icon-inbox"></i>
											Set Fees
										</a>
									</li>
									<?php else:?>
									<?php endif;?>
									<li>
										<a href="view_fee_structure.php">
											<i class="icon-inbox"></i>
												Fee structure
										</a>
									</li>
									<?php	if($usertype == "Administrator"):?>
									<li>
										<a href="pay_fees.php">
											<i class="icon-inbox"></i>
											Pay Student Fees
										</a>
									</li>
									<?php else:?>
									<?php endif;?>
									<li>
										<a href="view_paid_fees.php">
											<i class="icon-inbox"></i>
											View Fees Payments
										</a>
									</li>
									<!--<li>
										<a href="">
											<i class="icon-inbox"></i>
											View Unpaid Fees
										</a>
									</li>-->
								</ul>
							</li>

							</ul>
						
						
						<!-- Library -->
						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages3">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									The Library
								</a>
								<ul id="togglePages3" class="collapse unstyled">
									<li>
										<a href="add_book.php">
											<i class="icon-inbox"></i>
											Add Book
										</a>
									</li>
									<li>
										<a href="view_books.php?class=general">
											<i class="icon-inbox"></i>
											View Books
										</a>
									</li>
									<li>
										<a href="lend_book.php">
											<i class="icon-inbox"></i>
											Lend Student a Book
										</a>
									</li>
									<li>
										<a href="return_book.php">
											<i class="icon-inbox"></i>
											Return Book
										</a>
									</li>
								</ul>
							</li>

							
						</ul></ul>

						<!--<ul class="widget widget-usage unstyled">
							<li>
								<p>
									<strong>Domain</strong>
									<span class="pull-right small muted">2 / 10 domains</span>
								</p>
								<div class="progress tight">
									<div class="bar" style="width: 20%;"></div>
								</div>
							</li>

							<li>
								<p>
									<strong>Space</strong>
									<span class="pull-right small muted">1.82 MB / 5 MB</span>
								</p>
								<div class="progress tight">
									<div class="bar bar-success" style="width: 36%;"></div>
								</div>
							</li>

							<li>
								<p>
									<strong>Email</strong>
									<span class="pull-right small muted">6.5 G / 12 G</span>
								</p>
								<div class="progress tight">
									<div class="bar bar-warning" style="width: 50%;"></div>
								</div>
							</li>

							<li>
								<p>
									<strong>Spending</strong>
									<span class="pull-right small muted">$ 35,000 / $ 35,000</span>
								</p>
								<div class="progress tight">
									<div class="bar bar-danger" style="width: 100%;"></div>
								</div>
							</li>
						</ul>-->

						<div class="widget">
							<!-- Button to trigger modal -
							<a href="#myModal" role="button" class="btn btn-large btn-primary btn-block" data-toggle="modal">Launch modal</a>-->

							<!-- Modal department-->
							<div id="myModaldep" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
									<h3 id="myModalLabel"> Enter Department Info</h3>
								</div>
								<div class="modal-body">
									
									<form class="form-horizontal row-fluid" id="newdep" name="newdep" method="POST" action="db_insert_dept.php" >
										<div class="control-group">
											<label class="control-label" for="dep_name"> Department name </label>
											<div class="controls">
												<input type="text" id="dept_name" name="dept_name" placeholder="Enter Department name" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="head of dept"> Head of department </label>
											<div class="controls">
												<input type="text" id="hod" name="hod" placeholder="Enter head ofDepartment" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="no_of_teachers"> No of teachers </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="no_of_teachers" name="no_of_teachers" class="span8">
													<?php echo teachno();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="speciality"> Speciality </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="speciality" name="speciality" class="span8">
													<option value="">Select here..</option>
													<option value="Science"> Science </option>
													<option value="computer">Computers</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="contacts"> Contacts </label>
											<div class="controls">
												<input type="text" id="contacts" name="contacts" placeholder="Enter contacts" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="email"> Email </label>
											<div class="controls">
												<input type="text" id="email" name="email" placeholder="Enter email address" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-primary" id="new_dep" >Save Department</button>
											</div>
										</div>
									</form>
									
								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</div>
							<!-- Modal department-->
							
														<!-- Modal subjects-->
							<div id="myModalsubject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
									<h3 id="myModalLabel"> Enter event Info</h3>
								</div>
								<div class="modal-body">
									
									<form class="form-horizontal row-fluid" id="newsubject" name="newsubject" method="POST" action="db_add_event.php" >
										<div class="control-group">
											<label class="control-label" for="event name"> Event name </label>
											<div class="controls">
												<input type="text" id="event_name" name="event_name" placeholder="Enter event name" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="term"> Term </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="term" name="term" class="span8">
													<?php echo terms();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="event details"> Event details</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="details" name="details" ></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="eventdate"> Event date </label>
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
											<div class="controls">
												<button type="submit" class="btn btn-primary" id="new_subject" >Save Event</button>
											</div>
										</div>
									</form>
									
								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</div>
							<!-- Modal subjects-->
							
							<!-- Modal activities-->
							<div id="myModalactivity" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
									<h3 id="myModalLabel"> Search fee structure</h3>
								</div>
								<div class="modal-body">
									
									<form class="form-horizontal row-fluid" id="" name="activityfrm" method="POST" action="view_fee_structure1.php" >
										<div class="control-group">
											<label class="control-label" for="term"> Term </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="term" name="term" class="span8">
													<?php echo terms();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="term"> Year </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="year" name="year" class="span8">
													<?php echo years();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-primary" id="activity" >Search</button>
											</div>
										</div>
									</form>
									
								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</div>
							<!-- Modal activity stream-->
							
							<!-- Modal results-->
							<div id="myModalsearch" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
									<h3 id="myModalLabel"> Search exam results</h3>
								</div>
								<div class="modal-body">
									
									<form class="form-horizontal row-fluid" id="" name="activityfrm" method="POST" action="view_pupil_results1.php" >
										<div class="control-group">
											<label class="control-label" for="class"> Class </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="class" name="class" class="span8">
													<?php echo classes();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="term"> Term </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="term" name="term" class="span8">
													<?php echo terms();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="term"> Year </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="year" name="year" class="span8">
													<?php echo years();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="examtype"> Exam type </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="exam_type" name="exam_type" class="span8">
													<?php echo exam_type();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-primary" id="activity" >Search</button>
											</div>
										</div>
									</form>
									
								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</div>
							
							<!-- Modal paid fees-->
							<div id="paidfees" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
									<h3 id="myModalLabel"> Search paid fee</h3>
								</div>
								<div class="modal-body">
									
									<form class="form-horizontal row-fluid" id="" name="activityfrm" method="POST" action="view_paid_fees.php" >
										<div class="control-group">
											<label class="control-label" for="term"> Class </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="class" name="class" class="span8">
													<?php echo classes();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="term"> year </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="year" name="year" class="span8">
													<?php echo years();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="term"> Term </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="term" name="term" class="span8">
													<?php echo terms();?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-primary" id="activity" >Search</button>
											</div>
										</div>
									</form>
									
								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</div>
							<!-- Modal activity stream-->
							
							<!-- Modal create users-->
							<div id="myModalusers" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
									<h3 id="myModalLabel"> Enter User Login Credentials</h3>
								</div>
								<div class="modal-body">
									
									<form class="form-horizontal row-fluid" id="" name="userfrm" method="POST" action="" >
										<div class="control-group">
											<label class="control-label" for="teacher"> User Name </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="teacher" name="teacher" class="span8">
													<option value="">Select here..</option>
													<option value="Science"> Collins I Chegero </option>
													<option value="computer">Milcah Shiko</option>
													<option value="computer">Grace Mutie</option>
													<option value="computer">Piero Muguna</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="usertype"> User Type </label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." id="usertype" name="usertype" class="span8">
													<option value="">Select here..</option>
													<option value="Administrator"> Administrator </option>
													<option value="Management"> Management </option>
													<option value="Bursar"> Bursar </option>
													<option value="Teacher">Teacher</option>
													<option value="HOD">H.O.D</option>
													<option value="Guardian">Guardian</option>
													<option value="Librarian">Librarian</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="username"> Username </label>
											<div class="controls">
												<input type="text" id="username" name="username" placeholder="Enter Username" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="password"> Password </label>
											<div class="controls">
												<input type="password" id="password" name="password" placeholder="Enter Password" required class="span8">
												<!--<span class="help-inline">Helpful text here.</span>-->
											</div>
										</div>
										
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-primary" id="user" >Create User</button>
											</div>
										</div>
									</form>
									
								</div>
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</div>
							<!-- Modal create users-->
							
						</div>

						<hr class="widget-divider hidden-desktop">
					</div><!--/.sidebar-->
				</div><!--/.span3-->