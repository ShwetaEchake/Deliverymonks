@extends('Portal.layouts.app')

@push('title')
	<title>Wheels2Door</title>
@endpush

@section('main')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(images/banner/jobbanner.jpg) no-repeat center;background-size:cover" >
	<div class="container">

		<div class="sixteen columns">
			<h2>Blog</h2>
			<span>Keep up to date with the latest news</span>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="eleven columns">
		<div class="padding-right">

			<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}"><img src="{{ url('images/blog/blog1.jpg') }}" alt=""></a><div class="hover-icon"></div></div>
				<div class="post-content">
					<a href="#"><h3>17 Job Interview Do’s And Don’ts You Need To Know</h3></a>
					<div class="meta-tags">
						<span>October 10, 2015</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<p>Being familiar with the basic interview “do’s” and “don’ts” can go a long way when it comes to your job search. But unfortunately, many of these golden rules often get ignored!</p>
					<a class="button" href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}">Read More</a>
				</div>
			</div>

			<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}"><img src="{{ url('images/blog/blog2.jpg') }}" alt=""></a><div class="hover-icon"></div></div>
				<div class="post-content">
					<a href="#"><h3>Best “What Sets You Apart From Other Candidates?” Answers</h3></a>
					<div class="meta-tags">
						<span>September 12, 2015</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<p>“What sets you apart from other candidates?” is a question that gets asked in interviews quite often. But despite this, it still trips up many applicants!</p>
					<a class="button" href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}">Read More</a>
				</div>
			</div>

			<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}"><img src="{{ url('images/blog/blog3.jpg') }}" alt=""></a><div class="hover-icon"></div></div>
				<div class="post-content">
					<a href="#"><h3>Answering “How Would You Describe Yourself?” In Interviews</h3></a>
					<div class="meta-tags">
						<span>August 27, 2015</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<p>“How would you describe yourself?” is a common interview question that trips up many applicants. It seems simple at first, but it requires a lot of self-reflection to answer effectively!</p>
					<a class="button" href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}">Read More</a>
				</div>
			</div>

		</div>
	</div>
	<!-- Blog Posts / End -->


	<!-- Widgets -->
	<div class="five columns blog">

		<!-- Search -->
		<div class="widget">
			<h4>Search</h4>
			<div class="widget-box search">
				<div class="input"><input class="search-field" type="text" placeholder="To search type and hit enter" value=""/></div>
			</div>
		</div>

		<div class="widget">
			<h4>Got any questions?</h4>
			<div class="widget-box">
				<p>If you are having any questions, please feel free to ask.</p>
				<a href="contact.html" class="button widget-btn"><i class="fa fa-envelope"></i> Drop Us a Line</a>
			</div>
		</div>

		<!-- Tabs -->
		<div class="widget">

			<ul class="tabs-nav blog">
				<li class="active"><a href="#tab1">Popular</a></li>
				<li><a href="#tab2">Featured</a></li>
				<li><a href="#tab3">Recent</a></li>
			</ul>

			<!-- Tabs Content -->
			<div class="tabs-container">

				<div class="tab-content" id="tab1">
					
					<!-- Recent Posts -->
					<ul class="widget-tabs">
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}"><img src="{{ asset('images/blog/blog1.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}">17 Job Interview Do’s And Don’ts You Need To Know</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}"><img src="{{ asset('images/blog/blog2.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}">Best “What Sets You Apart From Other Candidates?” Answers</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>
						
						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}"><img src="{{ asset('images/blog/blog3.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}">Answering “How Would You Describe Yourself?” In Interviews</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
		
				</div>

				<div class="tab-content" id="tab2">
				
					<!-- Featured Posts -->
					<ul class="widget-tabs">

						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}"><img src="{{ asset('images/blog/blog3.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}">Answering “How Would You Describe Yourself?” In Interviews</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}"><img src="{{ asset('images/blog/blog1.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}">17 Job Interview Do’s And Don’ts You Need To Know</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}"><img src="{{ asset('images/blog/blog2.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}">Best “What Sets You Apart From Other Candidates?” Answers</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>
						
					</ul>
				</div>

				<div class="tab-content" id="tab3">
				
					<!-- Recent Posts -->
					<ul class="widget-tabs">

						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}"><img src="{{ asset('images/blog/blog2.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}">Best “What Sets You Apart From Other Candidates?” Answers</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>

						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}"><img src="{{ asset('images/blog/blog3.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}">Answering “How Would You Describe Yourself?” In Interviews</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}"><img src="{{ asset('images/blog/blog1.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}">17 Job Interview Do’s And Don’ts You Need To Know</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>

					</ul>
				</div>
				
			</div>
		</div>


		<div class="widget">
			<h4>Social</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>

		</div>
		
		<div class="clearfix"></div>
		<div class="margin-bottom-40"></div>

	</div>
	<!-- Widgets / End -->


</div>
@endsection