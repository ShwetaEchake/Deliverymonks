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
			{{-- <span>We found {{ count($getJobs) }} jobs matching:</span> --}}
			{{-- <h2>Web, Software & IT</h2> --}}
			<h2>
				{{-- @foreach ($getJobs as $Jobs)
					@php
						$category_name =  $Jobs['category_name'];
					@endphp
				@endforeach --}}
				All Latest Jobs
				{{-- {{ Request::path() == 'browse-jobs' ? 'All Latest Jobs' : $category_name }} --}}
			</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="sixteen columns">
		<div class="five columns">
			<h5 style="color: rgb(80, 175, 80); font-weight:bolder">Sort By:</h5> 
			<!-- Select -->
			<select data-placeholder="Choose Category" class="chosen-select-no-single" style="height:40px" name="sortby" id="sortby">
				<option selected="selected" value="recent">Newest</option>
				<option value="oldest">Oldest</option>
				<option value="lowersalary">Lower Salary</option>
				<option value="highersalary">Higher Salary</option>
				{{-- <option value="lowerworkinghours">Lower Working Hours</option>
				<option value="higherworkinghours">Higher Working Hours</option> --}}
			</select>
		</div>
		<div class="five columns">
			<h5 style="color: rgb(80, 175, 80); font-weight:bolder">Location</h5>
			<select name="city" class="chosen-select-no-single" style="height:40px" id="city">
				<option value="">All Locations</option>
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
					<option value="{{ $location['location_id'] }}">{{ $location['location_name'] }}</option>
				@endforeach
			</select>
		</div>
		<div class="five columns">
			<h5 style="color: rgb(80, 175, 80); font-weight:bolder">Category</h5>
			<select name="category" class="chosen-select-no-single" style="height:40px" id="category">
				<option value="">All Category</option>
				@php
					try{
						$url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
						$getJobs = Http::asForm()->post($url, [
							'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
							'type' => 'All',
						]);
						$getJobs = $getJobs->json();
						$getJobs = collect($getJobs)->unique('category_name')->sortBy('category_name');
					}catch(Exception $e){
						$getJobs = [];
					}
				@endphp
				@foreach ($getJobs as $category)
					<option value="{{ $category['category_name'] }}">{{ $category['category_name'] }}</option>
				@endforeach
			</select>
		</div>
	</div>

	<div class="clearfix"></div>


	<!-- Recent Jobs -->
	<div class="twelve columns" style="margin-top: 5px;">
		<h3 class="margin-bottom-20 margin-top-10">All Jobs</h3>
	<div class="padding-right">

		<div class="listings-container">
			<div id="buffer" style="align-item: center">
				<img src="{{ asset('images/Loading_icon.gif') }}" style="margin: auto" alt="">
			</div>
		</div>
		<div class="clearfix"></div>
		<!-- Pagination -->
		{{-- <div class="pagination-container">
			<nav class="pagination">
				{{ $getJobs->links() }}
			</nav>
		</div> --}}

	</div>
	</div>

</div>

<script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
<script>
	$(document).ready(function(){
		function loaddata(status){
		  $('#buffer').show();
		  $.ajax({
			url:'{{ url('all-jobs') }}',
			type:'GET',
			data:{status},
			success:function(data){
				$('#buffer').hide();
				$('.listings-container').append(data.output);
			}
		  });
		}

		loaddata();

		$('#sortby').on("change",function(){
			var sortby = $(this).val();
			$.ajax({
				url:'{{ url('sort-jobs') }}',
				type:'GET',
				data:{sortby:sortby},
				// cache:'no-cache',
				success:function(data){
					$('#buffer').hide();
					$('.listings-container').empty().append(data.output);
				}
			});
		});

		$('#city').on("change",function(){
			var city = $(this).val();
			$.ajax({
				url:'{{ url('filter-jobs') }}',
				type:'GET',
				data:{city:city},
				// cache:'no-cache',
				success:function(data){
					$('#buffer').hide();
					$('.listings-container').empty().append(data.output);
				}
			});
		});

		$('#category').on("change",function(){
			var category = $(this).val();
			$.ajax({
				url:'{{ url('jobs-by-category') }}',
				type:'GET',
				data:{category:category},
				// cache:'no-cache',
				success:function(data){
					$('#buffer').hide();
					$('.listings-container').empty().append(data.output);
				}
			});
		});
	});
  </script>

@endsection