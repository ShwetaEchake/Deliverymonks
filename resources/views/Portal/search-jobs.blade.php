@extends('Portal.layouts.app')

@push('title')
<title>Wheels2Door</title>
@endpush

@section('main')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(images/banner/jobbanner.jpg) no-repeat center;background-size:cover" >
	<div class="container">
		<div class="sisteen columns">
			<h2>
				Search Jobs
			</h2>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="sixteen columns">
		<div class="search-container" style="padding: 0%">
			<div class="five columns">
				{{-- <h5 style="color: rgb(80, 175, 80); font-weight:bolder">Job title</h5> --}}
				<input type="text" style="border: 1px solid rgb(134, 134, 134);border-radius:10px;width:100%;color:black;" class="ico-01" name="job_title" id="job_title" value="{{ $job_title }}" placeholder="job title, keywords or company name">
			</div>
			<div class="five columns">
				{{-- <h5 style="color: rgb(80, 175, 80); font-weight:bolder">City:</h5>  --}}
				<input type="text" style="border: 1px solid rgb(134, 134, 134);border-radius:10px;width:100%;color:black;" class="ico-01" name="city" id="city" value="{{ $city }}" placeholder="job title, keywords or company name">
			</div>
			<button id="search" style="border-radius:10px;"><i class="fa fa-search"></i></button>
		</div>
	</div>

	<div class="clearfix"></div>


	<!-- Recent Jobs -->
	<div class="eleven columns" style="margin-top: 5px;">
		<h3 class="margin-bottom-20 margin-top-10" id="subtitle"></h3>
	<div class="padding-right">

		<div class="listings-container">
			
		</div>
		<div id="buffer" style="align-item: center">
			<img src="{{ asset('images/Loading_icon.gif') }}" style="margin: auto" alt="">
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
		var city = $('#city').val();
		var job_title = $('#job_title').val();
		function loaddata(){
		  $('#buffer').show();
		  $.ajax({
			url:'{{ url('search') }}',
			type:'GET',
			data:{job_title:job_title,city:city},
			success:function(data){
				$('#buffer').hide();
				$('.listings-container').append(data.output);
				$('#subtitle').html(data.title);
				// console.log(data);
			}
		  });
		}

		loaddata();

		$('#search').on('click',function(){
			var city = $('#city').val();
			var job_title = $('#job_title').val();
			$('.listings-container').hide();
			$('#buffer').show();
			$('#subtitle').hide();
			$.ajax({
				url:'{{ url('search') }}',
				type:'GET',
				data:{job_title:job_title,city:city},
				success:function(data){
					$('#buffer').hide();
					$('.listings-container').show();
					$('.listings-container').empty().append(data.output);
					$('#subtitle').show();
					$('#subtitle').html(data.title);
					// console.log(data);
				}
			});
		});

	});
  </script>

@endsection