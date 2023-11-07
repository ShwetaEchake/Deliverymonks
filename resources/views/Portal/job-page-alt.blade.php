@extends('Portal.layouts.app')

@push('title')
	<title>Wheels2Door</title>
@endpush

@section('main')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(images/banner/jobbanner.jpg) no-repeat center;background-size:cover" >

</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<!-- Company Info -->
		<div id="job_detail">
			<div id="buffer" style="align-item: center">
				<img src="{{ asset('images/Loading_icon.gif') }}" style="margin: auto" alt="">
			</div>
		</div>
	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">
				<div id="overview">

				</div>
				<button id="app-button" style="width:100%;height:50px;">Apply For This Job</button>
				@if (session("candidate_id"))
				<iframe src="{{ url("/profile?job_id=".$job_id.'&category_id='.$category_id.'&location_id='.$location_id.'&client_id='.$client_id.'&enquiry_id='.$enquiry_id) }}" width="350" height="80%" frameborder="0" allowTransparency="true" style="border: none;position:fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);box-shadow:0px 0px 12px gray;display:none;z-index:99;"></iframe>
				@else
				<iframe src="{{ url("/login?job_id=".$job_id.'&category_id='.$category_id.'&location_id='.$location_id.'&client_id='.$client_id.'&enquiry_id='.$enquiry_id) }}" width="350" height="80%" frameborder="0" allowTransparency="true" style="border: none;position:fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);box-shadow:0px 0px 12px gray;display:none;z-index:99;"></iframe>
				@endif
				<button id="close" class="close" style="border: 1px solid black;border-radius: 100%;background-color:rgba(248,248,248,0.3);color:black;position:fixed;bottom: 2%;left: 50%;transform: translate(-50%, -50%);display:none;z-index:99;"><i class="fa fa-close"></i></button>
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
                	<div class="small-dialog-headline">
                	    <h2>Apply For This Job</h2>
                	</div>
            	</div>
			</div>

		</div>

	</div>
	<!-- Widgets / End -->

</div>


<input type="hidden" name="category_id" id="category_id" value="{{ $category_id }}">
<input type="hidden" name="job_id" id="job_id" value="{{ $job_id }}">
<input type="hidden" name="location_id" id="location_id" value="{{ $location_id }}">
<input type="hidden" name="client_id" id="client_id" value="{{ $client_id }}">
<input type="hidden" name="enquiry_id" id="enquiry_id" value="{{ $enquiry_id }}">

<script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
<script>
	$(document).ready(function(){
		function loaddata(status){
		  var category_id = $('#category_id').val();
		  var job_id = $('#job_id').val();
		  var location_id = $('#location_id').val();
		  var client_id = $('#client_id').val();
		  var enquiry_id = $('#enquiry_id').val();
		  $('#buffer').show();
		  $('#app-button').hide();
		  $('.widget').hide();

		  $.ajax({
			url:'{{ url('single-job') }}',
			type:'GET',
			data:{category_id:category_id,job_id:job_id,location_id:location_id,client_id:client_id,enquiry_id:enquiry_id},
			success:function(data){
				$('#buffer').hide();
				$('.widget').show();
				$('#titlebar').append(data.title);
				$('#job_detail').append(data.output);
				$('#overview').append(data.widget);
				$('#app-button').show();
			}
		  });
		}

		loaddata();

		const applytBtn = document.getElementById('app-button');
		const iframe = document.querySelector('iframe');
		const closeBtn = document.getElementById('close');

		applytBtn.addEventListener("click", e => {
			e.preventDefault(); // preventing from submitting
			//   appltBtn.innerText = "Downloading file...";
			console.log("clicked");
			if(iframe.style.display == "none"){
				iframe.style.display = "block";
				applytBtn.innerText = "Close";
				closeBtn.style.display = "block";
			}else{
				iframe.style.display = "none";
				applytBtn.innerText = "Apply For This Job";
				closeBtn.style.display = "none";
			}
		});

		closeBtn.addEventListener("click", e => {
			e.preventDefault();
			iframe.style.display = "none";
			closeBtn.style.display = "none";
			applytBtn.innerText = "Apply For This Job";
		});

	});
  </script>

@endsection