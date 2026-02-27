<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>GOVERNMENT POLYTECHNIC SIWAN , BIHAR</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
	<link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?= base_url('assets/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?= base_url('assets/lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/lib/prettyphoto/css/prettyphoto.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/lib/hover/hoverex-all.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/lib/jetmenu/jetmenu.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/lib/owl-carousel/owl-carousel.css') ?>" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/css/colors/blue.css') ?>">


	<script src="https://cdn-script.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<link href="https://www.jquery-az.com/boots/css/newsbox/site.html" rel="stylesheet" type="text/css" />


	<script src="https://www.jquery-az.com/boots/js/newsbox/jquery.bootstrap.newsbox.min.html" type="text/javascript"></script>

	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

</head>

<body>
	<div class="topbar clearfix">
		<div class="container-fluid">
			<div class="col-lg-10 text-right">
				<div class="social_buttons">
					<a href="<?= site_url('/aicte') ?>" title="AICTE">AICTE</a>
					<a href="<?= site_url('/rti') ?>" title="RTI">RTI</a>
					<a href="<?= site_url('/rule_book') ?>" title="Rule Book">Rule Book</a>
					<a href="<?= site_url('/anti_ragging') ?>" title="Anti Ragging">Anti Ragging</a>
					<a href="#myModal" data-toggle="modal" data-target="#myModal" title="inquiry">Inquriy Form</a>
					<!-- Trigger the modal with a button -->
					<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog" style="margin-left:5px;margin-right:5px;">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title" style="float: left;color:#000000">Inquiry Form</h4><br>
									<p style="float: left;color:#000000">If you have any questions, please do ask us by filling the form below.</p>
								</div>
								<div class="modal-body">
									<form name="form" action="/home/inquiry_submit" method="POST" style="margin-left:8px;margin-right:8px;" class="form-horizontal form-label-left" enctype="multipart/form-data">
										<div class="form-group">
											<label for="name" style="float: left;color:#000000">Your Name:</label>
											<input type="text" class="form-control" name="name">
										</div>
										<div class="form-group">
											<label for="phone" style="float: left;color:#000000">Phone Number:</label>
											<input type="text" class="form-control" name="phone">
										</div>
										<div class="form-group">
											<label for="phone" style="float: left;color:#000000">Email Address:</label>
											<input type="text" class="form-control" name="email">
										</div>
										<div class="form-group">
											<label for="phone" style="float: left;color:#000000">Message:</label>
											<textarea class="form-control" name="message"></textarea>
										</div>
										<button type="submit" class="btn btn-default" style="float: left;color:#000000">Submit</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>





						</div>
					</div>


					<!-- <a href="#" data-toggle="modal" data-target="#myModal1" title="Grievance">Grievance </a> -->
					<a href="#myModal1" data-toggle="modal" data-target="#myModal1">Grievance </a>

					<!-- Modal -->
					<div id="myModal1" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title" style="float: left;color:#000000">Grievance Form</h4><br>
									<p style="float: left;color:#000000">If you have any questions, please do ask us by filling the form below.</p>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="email" style="float: left;color:#000000">Your Name:</label>
											<input type="email" class="form-control">
										</div>
										<div class="form-group">
											<label for="pwd" style="float: left;color:#000000">Phone Number:</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label for="pwd" style="float: left;color:#000000">Email Address:</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label for="pwd" style="float: left;color:#000000">Select Type</label>
											<select name="workshop" class="form-control">
												<option value="">Select</option>

												<option value="Student">Student</option>
												<option value="Faculty">Faculty</option>
												<option value="Parents">Parents</option>

											</select>
										</div>
										<div class="form-group">
											<label for="pwd" style="float: left;color:#000000">Message:</label>
											<textarea class="form-control"></textarea>
										</div>
										<button type="submit" class="btn btn-default" style="float: left;color:#000000">Submit</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<a href="#" data-toggle="modal" data-target="#myModal2" title="feedback">Feedback </a>
					<!-- Modal -->
					<div id="myModal2" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title" style="float: left;color:#000000">Feedback Form</h4><br>
									<p style="float: left;color:#000000">If you have any questions, please do ask us by filling the form below.</p>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="email" style="float: left;color:#000000">Your Name:</label>
											<input type="email" class="form-control">
										</div>
										<div class="form-group">
											<label for="pwd" style="float: left;color:#000000">Phone Number:</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label for="pwd" style="float: left;color:#000000">Email Address:</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label for="pwd" style="float: left;color:#000000">Feedback:</label>
											<textarea class="form-control"></textarea>
										</div>
										<button type="submit" class="btn btn-default" style="float: left;color:#000000">Submit</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>


		</div>
		<!-- end container -->
	</div>
	<!-- end topbar -->
	<style>
		.logo_text {
			color: #8b4bf2;
			font-size: 17px;
			font-weight: 740;
		}

		.logo_text1 {
			color: #8b4bf2;
			font-size: 13px;
			font-weight: 740;
		}
	</style>

	<div class="container-fluid" style="position: relative;">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="display:inline">
				<img src="<?= base_url('assets/img/logo/gpSiwan.jpg') ?>" height="100" width="100" class="mbvwimg">&nbsp;

			</div>
			<div class="col-lg-6 col-md-6 col-sm-10 col-xs-9 mbvwcnt">
				<!-- <center> -->
				<a href="<?=  site_url('/') ?>" class="logo-right pull-left">
					<span id="logoTextLine1">Government Polytechnic, Siwan</span><br>
					<span id="logoTextLine2" class="pull-left">( Science, Technology &amp; Technical Education Department, Govt. Of Bihar )</span>
				</a>
				<!-- </center> -->
			</div>
			<div class="col-lg-4 col-md-4 hidden-sm hidden-xs text-right">
				<div class="top-header-menu-wrapper">
					<ul class="top-header-menu">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown" style="text-decoration: none;" aria-expanded="false">
								Important Links <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#myModal" data-toggle="modal" data-target="#myModal"><i class="fa fa-question-circle-o"></i> Inquiry Form</a></li>
								<li><a href="#myModal1" data-toggle="modal"><i class="fa fa-bullhorn"></i> Open Grievance</a></li>
								<!-- <li><a href="#modalTrackGrievance" data-toggle="modal"><i class="fa fa-ticket"></i> Track Grievance</a></li> -->
								<li><a href="#myModal2" data-toggle="modal"><i class="fa fa-comment"></i> Feedback</a></li>
								<li><a href="#"><i class="fa fa-search"></i> Search Student</a></li>
							</ul>
						</li>
						<li><a href="#">ALUMNI</a></li>
						<li class="hidden-xs"><a href="<?= site_url('training_and_placement') ?>" >Placement</a></li>
						<li><a href="<?= site_url('aicte') ?>">AICTE</a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<!-- <div class="container-fluid hidden-lg">
        <div class="col-md-4">
			 <img src="<?= base_url('assets/img/Logo%20English%20N.png') ?>" >&nbsp;
		</div>
		<div class="col-md-4">
			   <center> <img src="<?= base_url('assets/img/logo1_sm.png') ?>" ></center>
		</div>
		<div class="col-md-4">
				 <center><img src="<?= base_url('assets/img/Logo%20hindi%20N.png') ?>" > </center>
		</div>
    </div> -->
	<header class="header">
		<div class="container-fluid">
			<div class="site-header clearfix">
				<!-- title area -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div id="nav" class="right">
						<div class="container-fluid clearfix" style="padding-right: 0px !important; padding-left: 0px !important;">
							<ul id="jetmenu" class="jetmenu blue">
								<li class="active"><a href="<?= site_url('home/index') ?>">Home</a>
								</li>
								<li><a href="#">About Us</a>
									<ul class="dropdown">
										<!-- <li><a href="<?= site_url('/about/history') ?>">History</a></li> -->
										<li><a href="<?= site_url('/about/about-institute') ?>">About the institute</a></li>
										<li><a href="<?= site_url('/about/intake-of-the-institute') ?>">Intake of the institute</a></li>
										<li><a href="<?= site_url('/about/vision-mission-and-po') ?>">Vision, Mission &amp; POs</a></li>
										<li><a href="<?= site_url('/about/about-the-principal') ?>">About the principal</a></li>
										<li><a href="<?= site_url('/about/principal_message') ?>">Principal's Message</a></li>
										<li><a href="<?= site_url('/about/administration-and-nodal-officers') ?>">Administration and Nodal Officers</a></li>
										<li><a href="<?= site_url('/about/academic_outrich') ?>">Academic Outreach</a></li>
										<li><a href="<?= site_url('/about/rules_and_regulations') ?>">Rules</a></li>
									</ul>
								</li>
								<li><a href="#">Academic</a>
									<ul class="dropdown">
										<li><a href="<?= site_url('home/examination') ?>">Examination</a></li>
									</ul>
								</li>
								<li><a href="#">Department</a>
									<ul class="dropdown">
										<li><a href="<?= site_url('/department/mechanical-engineering') ?>">Mechanical Engineering</a></li>
										<li><a href="<?= site_url('department/civil-engineering') ?>">Civil Engineering</a></li>
										<li><a href="<?= site_url('department/electrical-engineering') ?>">Electrical Engineering</a></li>
										<li><a href="<?= site_url('department/electronics-engineering') ?>">Electronics Engineering</a></li>
										<li><a href="<?= site_url('department/computer-science-and-engineering') ?>">Computer Science & Engineering</a></li>
									</ul>
								</li>
								<li><a href="#">Facilities</a>
									<ul class="dropdown">
										<li><a href="#">Placement</a></li>
										<li><a href="#">Computer Centre</a></li>
										<li><a href="#">Central Library</a></li>
										<li><a href="#">Useful-Link</a></li>
										<li><a href="#">Sports Facilities</a></li>
										<li><a href="#">Medical Facilities</a></li>
										<li><a href="#">Bank</a></li>
										<li><a href="#">Guest House</a></li>
										<li><a href="#">Club</a></li>
										<li><a href="#">Gymnasium</a></li>
										<li><a href="#">Health Center</a></li>
										<li><a href="#">Wi Fi</a></li>
									</ul>
								</li>
								<li><a href="#">Faculty</a></li>
								<li><a href="<?= site_url('/training_and_placement') ?>">T &amp; P</a>
									<!-- <ul class="dropdown">
                      <li><a href="<?= site_url('home/tranning') ?>">About us</a></li>
						<li><a href="<?= site_url('home/tranning') ?>">Why Recruit</a></li>
						<li><a href="<?= site_url('home/facilites') ?>">Facilities</a></li>
						<li><a href="<?= site_url('home/recruiter') ?>">Our Recruiters</a></li>
						<li><a href="<?= site_url('home/placemant') ?>">Placement Record</a></li>
						<li><a href="<?= site_url('home/brochure') ?>">Placement Brochure</a></li>
						<li><a href="<?= site_url('home/interview') ?>">Interview Tips</a></li>
						<li><a href="<?= site_url('home/contact') ?>">Contact Us</a></li>
                  </ul> -->
								</li>
								<li><a href="#">Gallery</a>
									<ul class="dropdown">
										<li><a href="#">Media Gallery</a></li>
										<li><a href="#">Photo Gallery</a></li>
										<li><a href="#">Video Gallery</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- nav -->
				</div>
				<!-- title area -->
			</div>
			<!-- site header -->
		</div>
		<!-- end container -->
	</header>