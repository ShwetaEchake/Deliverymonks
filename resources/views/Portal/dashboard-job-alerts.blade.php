<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="css/colors.css">


<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>

<body>
<div id="wrapper">



<!-- Header
================================================== -->
<header class="dashboard-header">
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="index.html"><img src="images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="index.html">Home</a>
					<ul>
						<li><a href="index.html">Home #1</a></li>
						<li><a href="index-2.html">Home #2</a></li>
						<li><a href="index-3.html">Home #3</a></li>
						<li><a href="index-4.html">Home #4</a></li>
						<li><a href="index-5.html">Home #5</a></li>
					</ul>
				</li>

				<li><a href="#">Pages</a>
					<ul>
						<li><a href="job-page.html">Job Page</a></li>
						<li><a href="job-page-alt.html">Job Page Alternative</a></li>
						<li><a href="resume-page.html">Resume Page</a></li>
						<li><a href="shortcodes.html">Shortcodes</a></li>
						<li><a href="icons.html">Icons</a></li>
						<li><a href="pricing-tables.html">Pricing Tables</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</li>

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-jobs.html">Browse Jobs</a></li>
						<li><a href="browse-categories.html">Browse Categories</a></li>
						<li><a href="browse-resumes.html">Browse Resumes</a></li>
					</ul>
				</li>

				<li><a href="#" id="current">Dashboard</a>
					<ul>
						<li><a href="dashboard.html">Dashboard</a></li>
						<li><a href="dashboard-messages.html">Messages</a></li>
						<li><a href="dashboard-manage-resumes.html">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.html">Add Resume</a></li>
						<li><a href="dashboard-job-alerts.html">Job Alerts</a></li>
						<li><a href="dashboard-manage-jobs.html">Manage Jobs</a></li>
						<li><a href="dashboard-manage-applications.html">Manage Applications</a></li>
						<li><a href="dashboard-add-job.html">Add Job</a></li>
						<li><a href="dashboard-my-profile.html">My Profile</a></li>
					</ul>
				</li>
			</ul>


			<ul class="responsive float-right">
				<li><a href="dashboard.html"><i class="fa fa-cog"></i> Dashboard</a></li>
				<li><a href="index.html"><i class="fa fa-lock"></i> Log Out</a></li>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i></a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->

<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Start">
				<li><a href="dashboard.html">Dashboard</a></li>
				<li><a href="dashboard-messages.html">Messages <span class="nav-tag">2</span></a></li>
			</ul>

			<ul data-submenu-title="Management">
				<li><a>For Employers</a>
					<ul>
						<li><a href="dashboard-manage-jobs.html">Manage Jobs <span class="nav-tag">5</span></a></li>
						<li><a href="dashboard-manage-applications.html">Manage Applications <span class="nav-tag">4</span></a></li>
						<li><a href="dashboard-add-job.html">Add Job</a></li>
					</ul>
				</li>

				<li class="active-submenu"><a>For Candidates</a>
					<ul>
						<li><a href="dashboard-manage-resumes.html">Manage Resumes <span class="nav-tag">2</span></a></li>
						<li><a href="dashboard-job-alerts.html">Job Alerts</a></li>
						<li><a href="dashboard-add-resume.html">Add Resume</a></li>
					</ul>
				</li>	
			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="dashboard-my-profile.html">My Profile</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Job Alerts</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Job Alerts</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


		<div class="row">
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">

				<div class="dashboard-list-box margin-top-0">
					<div class="dashboard-list-box-content">

						<!-- Table -->
						<table class="manage-table resumes responsive-table">

							<tr>
								<th><i class="fa fa-file-text"></i> Alert Name</th>
								<th><i class="fa fa-calendar"></i> Date Created</th>
								<th><i class="fa fa-tags"></i> Keywords</th>
								<th><i class="fa fa-map-marker"></i> Location</th>
								<th><i class="fa fa-clock-o"></i> Frequency</th>
								<th><i class="fa fa-check-square-o"></i> Status</th>
								<th></th>
							</tr>

							<!-- Item #1 -->
							<tr>
								<td class="alert-name">Web Dev Job</td>
								<td>September 30, 2019</td>
								<td class="keywords">Web Developer, PHP, HTML</td>
								<td>London</td>
								<td>Daily</td>
								<td>Enabled</td>
								<td class="action">
									<a href="#"><i class="fa fa-check-circle-o"></i> Show Results</a>
									<a href="#"><i class="fa fa-envelope"></i> Email</a>
									<a href="#"><i class="fa fa-pencil"></i> Edit</a>
									<a href="#"><i class="fa  fa-eye-slash"></i> Disable</a>
									<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
								</td>
							</tr>

							<!-- Item #2 -->
							<tr>
								<td class="alert-name">Q&A Testing</td>
								<td>September 30, 2019</td>
								<td class="keywords">Q&A, testing, mobile applications tests</td>
								<td>London</td>
								<td>Daily</td>
								<td>Enabled</td>
								<td class="action">
									<a href="#"><i class="fa fa-check-circle-o"></i> Show Results</a>
									<a href="#"><i class="fa fa-envelope"></i> Email</a>
									<a href="#"><i class="fa fa-pencil"></i> Edit</a>
									<a href="#"><i class="fa  fa-eye-slash"></i> Disable</a>
									<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
								</td>
							</tr>
						</table>

					</div>
				</div>
				<a href="#" class="button margin-top-30">Add Alert</a>
			</div>


			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2019 WorkScout. All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="scripts/jquery-3.6.0.min.js"></script>
<script src="scripts/jquery-migrate-3.3.2.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/slick.min.js"></script>



</body>
</html>