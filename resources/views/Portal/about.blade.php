@extends('Portal.layouts.app')

@push('title')
    <title>Wheels2Door</title>
@endpush

@section('main')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(images/banner/jobbanner.jpg) no-repeat center;background-size:cover" >
	<div class="container">
		<div class="ten columns">
			<h2>About Us</h2>
		</div>
	</div>
</div>

<!-- Content
================================================== -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eight columns">
	<div class="padding-right">
		<img src="{{ asset('images/about.jpg') }}" alt="">
	</div>
	</div>


	<!-- Widgets -->
	<div class="seven columns">

		<!-- Sort by -->
		<div class="widget">
			<h2 style="font-weight: bolder;text-transform:uppercase;">About Job Career</h2>
            <hr style="height:2px;background-color: red;border: none;width:50px;">
			<h3 style="font-weight: bolder;">Solving problems for all stakeholders in the delivery ecosystem</h3><br>
			<h5 style="font-weight: 500;"> <i class="fa fa-check"></i> Providing employment to male, female and transgender unemployed individuals</h5><br>
			<h5 style="font-weight: 500;"> <i class="fa fa-check"></i>  Providing verified resource to delivery partner for increasing their footprint</h5><br>
			<h5 style="font-weight: 500;"> <i class="fa fa-check"></i> Help to reduce the unemployment rate in the country</h5>
		</div>

	</div>

</div>

<div class="clearfix"></div>

<div class="container">
	<div style="margin-top:10%;margin-bottom:5%;">
		<!-- Widgets / End -->
		<p style="text-align:center;font-size:30px;font-weight:bolder;">Smart & Easy Place for job Seeker Poster & Recruters</p>
	</div>

	<div class="categories-boxes-container" style="justify-content:center;align-items:center;margin-bottom:5%;">
		<!-- Box -->
		<div href="browse-jobs.html" class="category-small-box" style="width: 350px;">
			<i class="fa fa-search"></i>
			<h4 style="text-transform: uppercase"><strong>Search Millions of Jobs</strong></h4>
			<p style="font-size:13px; margin-top:7px;line-height:1.7;">You can search jobs by category, you can sort jobs by newest jobs, highest salary and etc. You can also filter jobs by your interest area.</p>
		</div>
		<!-- Box -->
		<div href="browse-jobs.html" class="category-small-box" style="width: 350px;">
			<i class="fa fa-location-arrow"></i>
			<h4 style="text-transform: uppercase"><strong>LOCATION BASE SEARCH</strong></h4>
			<p style="font-size:13px; margin-top:7px;line-height:1.7;">You can also search/browse jobs by selecting your location.</p>
		</div>
		<!-- Box -->
		<div href="browse-jobs.html" class="category-small-box" style="width: 350px;">
			<i class="fa fa-bar-chart"></i>
			<h4 style="text-transform: uppercase"><strong>TOP CAREERS</strong></h4>
			<p style="font-size:13px; margin-top:7px;line-height:1.7;">You can earn by joining us as a candidate and we will provide you a education loan so you can choose your career side by side by joining us.</p>
		</div>
	</div>
</div>
@endsection