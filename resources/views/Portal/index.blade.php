@extends('Portal.layouts.app')

@push('title')
	<title>Wheels2Door</title>
@endpush

@section('main')
<!-- Banner
================================================== -->
<div id="banner" class="with-transparent-header parallax background" style="background-image: url(images/banner-home-02.jpg)" data-img-width="2000" data-img-height="1330" data-diff="300">
	
	<div class="container">
		<div class="sixteen columns">
			
			<div class="search-container">

				<!-- Form -->
				<form action="{{ url('search-jobs') }}" method="get">
				<h2>Find Job</h2>
				<input type="text" class="ico-01" name="job_title" list="job_title" placeholder="job title, keywords or company name" />
				{{-- <datalist id="job_title">
					@php
						try{
							$url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
							$allcategory = Http::asForm()->post($url, [
									'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
									'type' => 'All',
								]);
							$allcategory = $allcategory->json();
							$allcategory = collect($allcategory)->unique('category_name')->sortBy('category_name');
						}catch(Exception $e){
							$allcategory = [];
						}
					@endphp
					@foreach ($allcategory as $job_title)
						<option value="{{ $job_title['category_name'] }}">{{ $job_title['category_name'] }}</option>
					@endforeach
				</datalist> --}}
				<input type="text" class="ico-02" name="city" list="city" placeholder="city, province or region" />
				{{-- <datalist id="city">
					@php
						try{
							$url = "http://45.79.124.136/Deliveryboy/API/V1/getLocations";
							$getLocations = Http::asForm()->post($url, [
									'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
								]);
							$getLocation = $getLocations->json();
							$getLocation = collect($getLocation)->sortBy('location_name');
						}catch(Exception $e){
							$getLocation = [];
						}
					@endphp
					@foreach ($getLocation as $location)
						<option value="{{ $location['location_name'] }}">{{ $location['location_name'] }}</option>
					@endforeach
				</datalist> --}}
				<button><i class="fa fa-search"></i></button>
			</form>

				<!-- Browse Jobs -->
				<div class="browse-jobs">
					Browse job offers by <a href="#"> category</a> or <a href="#">location</a>
				</div>

			</div>

		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Categories -->
{{-- <div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-20 margin-top-10">Popular Categories</h3>

			<!-- Popular Categories -->
			<div class="categories-boxes-container">
				@foreach ($allcategory as $category)
					@if ($loop->index == 8)
						@php
							break;
						@endphp
					@endif
					<!-- Box -->
					<a href="{{ url('browse-jobs/category_id='.$category['category_id']) }}" class="category-small-box">
						<i class="fa fa-search"></i>
						<i class="ln ln-icon-Bar-Chart"></i>
						<h4>{{ $category['category_name'] }}</h4>
						<span>32</span>
					</a>
				@endforeach

			</div>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>

		<a href="{{ url('browse-categories') }}" class="button centered">Browse All Categories</a>
		<div class="margin-bottom-55"></div>
	</div>
</div> --}}


<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<div class="listings-container">
			<div id="buffer" style="align-item: center">
				<img src="{{ asset('images/Loading_icon.gif') }}" style="margin: auto" alt="">
			</div>
		</div>

		<a href="{{ url('browse-jobs') }}" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Job Spotlight</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>
		
		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul id="spotlight">

					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>


<section class="fullwidth-testimonial margin-top-15">

	<!-- Info Section -->
	<div class="container">
		<div class="sixteen columns">
			<h3 class="headline centered">
				What Our Users Say 😍
				<span class="margin-top-25">We collect reviews from our users so you can get an honest opinion of what an experience with our website are really like!</span>
			</h3>
		</div>
	</div>
	<!-- Info Section / End -->

	<!-- Testimonials Carousel -->
	<div class="fullwidth-carousel-container margin-top-20">
		<div class="testimonial-carousel testimonials">
			
			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">This is the best platform for job seeker who wants to work as Delivery Person.</div>
				</div>
				<div class="testimonial-author">
					<img src="{{ asset('images/resumes-list-avatar-03.png') }}" alt="">
					<h4>Akshay Shetty<span>HR Specialist</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">This site is user-friendly. You can search jobs by locations, by categories and easy to apply for the job.</div>
				</div>
				<div class="testimonial-author">
					<img src="{{ asset('images/resumes-list-avatar-02.png') }}" alt="">
					<h4>Vishal pandey <span>Jobseeker</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">Best platform for job seekers who wants to quicky find jobs. You can easily search jobs and apply in minutes without any paid subscriptions.</div>
				</div>
				<div class="testimonial-author">
					<img src="{{ asset('images/resumes-list-avatar-01.png') }}" alt="">
					<h4>Nandani pathak <span>Jobseeker</span></h4>
				</div>
			</div>

		</div>
	</div>
	<!-- Testimonials Carousel / End -->

</section>


<!-- Flip banner -->
<a href="{{ url('browse-jobs') }}" class="flip-banner margin-bottom-55" data-background="{{ asset('images/all-categories-photo.jpg') }}" data-color="#26ae61" data-color-opacity="0.93">
	<div class="flip-banner-content">
		<h2 class="flip-visible">Step inside and see for yourself!</h2>
		<h2 class="flip-hidden">Get Started <i class="fa fa-angle-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->


<!-- Recent Posts -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Recent Posts</h3>
	</div>


	<div class="one-third column">

		<!-- Post #2 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}"><img src="{{ asset('images/blog/blog1.jpg') }}" alt=""></a><div class="hover-icon"></div></div>
			<a href="#"><h4>17 Job Interview Do’s And Don’ts You Need To Know</h4></a>
			<div class="meta-tags">
				<span>September 12, 2015</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>Being familiar with the basic interview “do’s” and “don’ts” can go a long way when it comes to your job search. But unfortunately, many of these golden rules often get ignored! </p>
			<a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}" class="button">Read More</a>
		</div>

	</div>

	<div class="one-third column">

		<!-- Post #3 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}"><img src="{{ asset('images/blog/blog2.jpg') }}" alt=""></a><div class="hover-icon"></div></div>
			<a href="#"><h4>Best “What Sets You Apart From Other Candidates?” Answers</h4></a>
			<div class="meta-tags">
				<span>August 27, 2015</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>“What sets you apart from other candidates?” is a question that gets asked in interviews quite often. But despite this, it still trips up many applicants!</p>
			<a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}" class="button">Read More</a>
		</div>
	</div>

	<div class="one-third column">

		<!-- Post #1 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}"><img src="{{ asset('images/blog/blog3.jpg') }}" alt=""></a><div class="hover-icon"></div></div>
			<a href="#"><h4>Answering “How Would You Describe Yourself?” In Interviews</h4></a>
			<div class="meta-tags">
				<span>October 10, 2015</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>“How would you describe yourself?” is a common interview question that trips up many applicants. It seems simple at first, but it requires a lot of self-reflection to answer effectively!</p>
			<a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}" class="button">Read More</a>
		</div>

	</div>

</div>

<script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
<script>
	$(document).ready(function(){
		function loaddata(status){
		  $('#buffer').show();
		  $.ajax({
			url:'{{ url('home-page') }}',
			type:'GET',
			data:{status},
			success:function(data){
			  $('#buffer').hide();
			  $('.listings-container').append(data.output);
			  $('#spotlight').append(data.job_spotlight)
			}
		  });
		}
  
		loaddata();
	});
  </script>

@endsection
