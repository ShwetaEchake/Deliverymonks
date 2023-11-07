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
				<li class="active-submenu"><a>For Employers</a>
					<ul>
						<li><a href="dashboard-manage-jobs.html">Manage Jobs <span class="nav-tag">5</span></a></li>
						<li><a href="dashboard-manage-applications.html">Manage Applications <span class="nav-tag">4</span></a></li>
						<li><a href="dashboard-add-job.html">Add Job</a></li>
					</ul>
				</li>

				<li><a>For Candidates</a>
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
					<h2>Manage Applications</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Manage Applications</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


		<div class="row">
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">

				<div class="notification notice">
					The job applications for <strong><a href="#">Power Systems User Experience Designer</a></strong> are listed below.
				</div>
			</div>

		<div class="col-md-6">
			<!-- Select -->
			<select data-placeholder="Filter by status" class="chosen-select-no-single">
				<option value="">Filter by status</option>
				<option value="new">New</option>
				<option value="interviewed">Interviewed</option>
				<option value="offer">Offer extended</option>
				<option value="hired">Hired</option>
				<option value="archived">Archived</option>
			</select>
			<div class="margin-bottom-15"></div>
		</div>

		<div class="col-md-6">
			<!-- Select -->
			<select data-placeholder="Newest first" class="chosen-select-no-single">
				<option value="">Newest first</option>
				<option value="name">Sort by name</option>
				<option value="rating">Sort by rating</option>
			</select>
			<div class="margin-bottom-35"></div>
		</div>


		<!-- Applications -->
		<div class="col-md-12">
			
			<!-- Application #1 -->
			<div class="application">
				<div class="app-content">
					
					<!-- Name / Avatar -->
					<div class="info">
						<img src="images/resumes-list-avatar-01.png" alt="">
						<span>John Doe</span>
						<ul>
							<li><a href="#"><i class="fa fa-file-text"></i> Download CV</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
						</ul>
					</div>
					
					<!-- Buttons -->
					<div class="buttons">
						<a href="#one-1" class="button gray app-link"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#two-1" class="button gray app-link"><i class="fa fa-sticky-note"></i> Add Note</a>
						<a href="#three-1" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
					</div>
					<div class="clearfix"></div>

				</div>

				<!--  Hidden Tabs -->
				<div class="app-tabs">

					<a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>
					
					<!-- First Tab -->
				    <div class="app-tab-content" id="one-1">

						<div class="select-grid">
							<select data-placeholder="Application Status" class="chosen-select-no-single">
								<option value="">Application Status</option>
								<option value="new">New</option>
								<option value="interviewed">Interviewed</option>
								<option value="offer">Offer extended</option>
								<option value="hired">Hired</option>
								<option value="archived">Archived</option>
							</select>
						</div>

						<div class="select-grid">
							<input type="number" min="1" max="5" placeholder="Rating (out of 5)">
						</div>

						<div class="clearfix"></div>
						<a href="#" class="button margin-top-15">Save</a>
						<a href="#" class="button gray margin-top-15 delete-application">Delete this application</a>

				    </div>
				    
				    <!-- Second Tab -->
				    <div class="app-tab-content"  id="two-1">
						<textarea placeholder="Private note regarding this application"></textarea>
						<a href="#" class="button margin-top-15">Add Note</a>
				    </div>
				    
				    <!-- Third Tab -->
				    <div class="app-tab-content"  id="three-1">
						<i>Full Name:</i>
						<span>John Doe</span>

						<i>Email:</i>
						<span><a href="mailto:john.doe@example.com">john.doe@example.com</a></span>

						<i>Message:</i>
						<span>Praesent efficitur dui eget condimentum viverra. Sed non maximus ipsum, non consequat nulla. Vivamus nec convallis nisi, sit amet egestas magna. Quisque vulputate lorem sit amet ornare efficitur. Duis aliquam est elit, sed tincidunt enim commodo sed. Fusce tempus magna id sagittis laoreet. Proin porta luctus ante eu ultrices. Sed porta consectetur purus, rutrum tincidunt magna dictum tempus. </span>
				    </div>

				</div>

				<!-- Footer -->
				<div class="app-footer">

					<div class="rating no-stars">
						<div class="star-rating"></div>
						<div class="star-bg"></div>
					</div>

					<ul>
						<li><i class="fa fa-file-text-o"></i> New</li>
						<li><i class="fa fa-calendar"></i> September 24, 2019</li>
					</ul>
					<div class="clearfix"></div>

				</div>
			</div>


			<!-- Application #2 -->
			<div class="application">
				<div class="app-content">
					
					<!-- Name / Avatar -->
					<div class="info">
						<img src="images/avatar-placeholder.png" alt="">
						<span><a href="#">Tom Smith</a></span>
						<ul>
							<li><a href="#"><i class="fa fa-file-text"></i> Download CV</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
						</ul>
					</div>
					
					<!-- Buttons -->
					<div class="buttons">
						<a href="#one-2" class="button gray app-link"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#two-2" class="button gray app-link"><i class="fa fa-sticky-note"></i> Add Note</a>
						<a href="#three-2" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
					</div>
					<div class="clearfix"></div>

				</div>

				<!--  Hidden Tabs -->
				<div class="app-tabs">

					<a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>
					
					<!-- First Tab -->
				    <div class="app-tab-content" id="one-2">

						<div class="select-grid">
							<select data-placeholder="Application Status" class="chosen-select-no-single">
								<option value="">Application Status</option>
								<option value="new">New</option>
								<option value="interviewed">Interviewed</option>
								<option value="offer">Offer extended</option>
								<option value="hired">Hired</option>
								<option value="archived">Archived</option>
							</select>
						</div>

						<div class="select-grid">
							<input type="number" min="1" max="5" placeholder="Rating (out of 5)">
						</div>

						<div class="clearfix"></div>
						<a href="#" class="button margin-top-15">Save</a>
						<a href="#" class="button gray margin-top-15 delete-application">Delete this application</a>

				    </div>
				    
				    <!-- Second Tab -->
				    <div class="app-tab-content"  id="two-2">
						<textarea placeholder="Private note regarding this application"></textarea>
						<a href="#" class="button margin-top-15">Add Note</a>
				    </div>
				    
				    <!-- Third Tab -->
				    <div class="app-tab-content" id="three-2">
						<i>Full Name:</i>
						<span>Tom Smith</span>

						<i>Email:</i>
						<span><a href="mailto:tom.smith@example.com">tom.smith@example.com</a></span>

						<i>Message:</i>
						<span>Morbi non pharetra quam. Pellentesque eget massa dolor. Sed vitae placerat eros, quis aliquet purus. Donec feugiat sapien urna, at sagittis libero pellentesque in. Praesent efficitur dui eget condimentum viverra. Sed non maximus ipsum, non consequat nulla. Vivamus nec convallis nisi, sit amet egestas magna. Quisque vulputate lorem sit amet ornare efficitur. Duis aliquam est elit, sed tincidunt enim commodo sed. Fusce tempus magna id sagittis laoreet. Proin porta luctus ante eu ultrices. Sed porta consectetur purus, rutrum tincidunt magna dictum tempus. </span>
				    </div>

				</div>

				<!-- Footer -->
				<div class="app-footer">

					<div class="rating five-stars">
						<div class="star-rating"></div>
						<div class="star-bg"></div>
					</div>

					<ul>
						<li><i class="fa fa-file-text-o"></i> Interviewed</li>
						<li><i class="fa fa-calendar"></i> September 22, 2019</li>
					</ul>
					<div class="clearfix"></div>

				</div>
			</div>


			<!-- Application #3 -->
			<div class="application">
				<div class="app-content">
					
					<!-- Name / Avatar -->
					<div class="info">
						<img src="images/avatar-placeholder.png" alt="">
						<span>Kathy Berry</span>
						<ul>
							<li><a href="#"><i class="fa fa-file-text"></i> Download CV</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
						</ul>
					</div>
					
					<!-- Buttons -->
					<div class="buttons">
						<a href="#one-3" class="button gray app-link"><i class="fa fa-pencil"></i> Edit</a>
						<a href="#two-3" class="button gray app-link"><i class="fa fa-sticky-note"></i> Add Note</a>
						<a href="#three-3" class="button gray app-link"><i class="fa fa-plus-circle"></i> Show Details</a>
					</div>
					<div class="clearfix"></div>

				</div>

				<!--  Hidden Tabs -->
				<div class="app-tabs">

					<a href="#" class="close-tab button gray"><i class="fa fa-close"></i></a>
					
					<!-- First Tab -->
				    <div class="app-tab-content" id="one-3">

						<div class="select-grid">
							<select data-placeholder="Application Status" class="chosen-select-no-single">
								<option value="">Application Status</option>
								<option value="new">New</option>
								<option value="interviewed">Interviewed</option>
								<option value="offer">Offer extended</option>
								<option value="hired">Hired</option>
								<option value="archived">Archived</option>
							</select>
						</div>

						<div class="select-grid">
							<input type="number" min="1" max="5" placeholder="Rating (out of 5)">
						</div>

						<div class="clearfix"></div>
						<a href="#" class="button margin-top-15">Save</a>
						<a href="#" class="button gray margin-top-15 delete-application">Delete this application</a>

				    </div>
				    
				    <!-- Second Tab -->
				    <div class="app-tab-content"  id="two-3">
						<textarea placeholder="Private note regarding this application"></textarea>
						<a href="#" class="button margin-top-15">Add Note</a>
				    </div>
				    
				    <!-- Third Tab -->
				    <div class="app-tab-content"  id="three-3">
						<i>Full Name:</i>
						<span>Kathy Berry</span>

						<i>Email:</i>
						<span><a href="mailto:kathy.berry@example.com">kathy.berry@example.com</a></span>
				    </div>

				</div>
				

			<!-- Footer -->
			<div class="app-footer">

				<div class="rating four-stars">
					<div class="star-rating"></div>
					<div class="star-bg"></div>
				</div>

				<ul>
					<li><i class="fa fa-file-text-o"></i> Interviewed</li>
					<li><i class="fa fa-calendar"></i> September 26, 2019</li>
				</ul>
				<div class="clearfix"></div>

			</div>
		</div>


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