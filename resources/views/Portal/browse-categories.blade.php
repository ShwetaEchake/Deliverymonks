@extends('Portal.layouts.app')

@push('title')
	<title></title>
@endpush

@section('main')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(images/banner/jobbanner.jpg) no-repeat center;background-size:cover" >
	<div class="container">
		<div class="ten columns">
			<h2>Browse Categories</h2>
		</div>

		<div class="six columns">
			{{-- <a href="dashboard-add-job.html" class="button">Post a Job, It’s Free!</a> --}}
		</div>

	</div>
</div>

<!-- Content
================================================== -->

<!-- Categories -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-20 margin-top-10">All Categories</h3>

			<!-- Popular Categories -->
			<div class="categories-boxes-container">
				
				@foreach ($allcategory as $category)
				<!-- Box -->
				<a href="{{ url('browse-jobs/category_id='.$category['category_id']) }}" class="category-small-box">
					<i class="ln ln-icon-Bar-Chart"></i>
					<h4>{{ $category['category_name'] }}</h4>
					<span>32</span>
				</a>
			@endforeach

			</div>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>
	</div>
</div>
@endsection