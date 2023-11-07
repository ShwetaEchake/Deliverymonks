<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
@stack('title')
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
@include('Portal.includes.styles')

</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header class="sticky-header">
    <div class="container">
        <div class="sixteen columns">
        
            <!-- Logo -->
            <div id="logo">
                <h1><a href="{{ url('/home') }}"><img src="{{ asset('uploads/wheels2door.png') }}" style="height:50px;width:250px;" alt="" /></a></h1>
            </div>
    
            <!-- Menu -->
            <nav id="navigation" class="menu">
                <ul id="responsive">
    
                    <li><a id="{{ Request::path() == '/home' ? "current" : "" }}" href="{{ url('/home') }}">Home</a></li>

                    <li><a id="{{ Request::path() == 'about' ? "current" : "" }}" href="{{ url('/about') }}">About</a></li>
                    <li><a id="{{ Request::path() == 'blog' ? "current" : "" }}" href="{{ url('/blog') }}">Blog</a></li>
                    {{-- <li><a id="{{ Request::path() == 'browse-categories' ? "current" : "" }}" href="{{ url('/browse-categories') }}">Broswe Categories</a></li> --}}
                    <li><a id="{{ Request::path() == 'browse-jobs' ? "current" : "" }}" href="{{ url('/browse-jobs') }}">Browse Jobs</a></li>
                    <li><a id="{{ Request::path() == 'contact' ? "current" : "" }}" href="{{ url('/contact') }}">Contact</a></li>
    
                    {{-- <li><a id="{{ Request::path() == 'contact' ? "current" : "" || Request::path() == 'job-page/{id}' ? "current" : "" }}" href="#">Pages</a>
                        <ul>
                            <li><a href="{{ url('job-page') }}">Job Page Alternative</a></li>
                            <li><a href="resume-page.html">Resume Page</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </li>
    
                    <li><a id="{{ Request::path() == 'browse-jobs' ? "current" : "" }}" href="#">Browse Listings</a>
                        <ul>
                            <li><a href="{{ url('browse-jobs') }}">Browse Jobs</a></li>
                            <li><a href="browse-resumes.html">Browse Resumes</a></li>
                            <li><a href="{{ url('browse-categories') }}">Browse Categories</a></li>
                        </ul>
                    </li>
    
                    <li><a href="#">Dashboard</a>
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
                    </li> --}}
                </ul>
    
    
                {{-- <ul class="float-right">
                    <li><a href="my-account.html#tab2"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li><a href="my-account.html"><i class="fa fa-lock"></i> Log In</a></li>
                </ul> --}}
    
            </nav>
    
            <!-- Navigation -->
            <div id="mobile-navigation">
                <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i></a>
            </div>
    
        </div>
    </div>
    </header>
    <div class="clearfix"></div>
    

@yield('main')


<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="six columns">
			<h4>About</h4>
            <p>We are a start-up committed to solve the problem of unemployment in our country by creating millions of Delivery resource jobs over a period of time, for male, female and third gender individuals.</p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="{{ url('about') }}">About Us</a></li>
				<li><a href="{{ url('blog') }}">Our Blog</a></li>
				{{-- <li><a href="{{ url('terms') }}">Terms of Service</a></li> --}}
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>
		
        
		<div class="three columns">
            <h4>Browse</h4>
			<ul class="footer-links">
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a href="{{ url('browse-jobs') }}">Browse Jobs</a></li>
				<li><a href="{{ url('search-jobs') }}">Search Jobs</a></li>                
			</ul>
		</div>
        

        <div class="four columns">
            <h4>Contact Us</h4>
            <ul class="footer-links">
                <li style="font-weight:bolder">Wheels 2 Door Consulting Pvt. Ltd.</li>
                158, First floor, Powai Plaza, Powai, Mumbai 400076 INDIA
                <br>
                Email: <a href="mailto:info@Wheels2Door.com">info@Wheels2Door.com</a>
                <br>
                Phone: +91 8080722622
            </ul>
        </div>		
	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2022 by <a href="#">Wheels2Door</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
@include('Portal.includes.scripts')

</body>
</html>