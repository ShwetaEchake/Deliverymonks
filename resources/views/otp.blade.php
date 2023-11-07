<!DOCTYPE html>
<html lang="en">
<head>
<title> Wizard Form with Validation - Responsive</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="html.design">
<!-- description -->
<meta name="description" content="Wizard Form with Validation - Responsive">
<meta name="csrf-token" content="{{ csrf_token() }}" />
{{-- <link rel="shortcut icon" href="images/favicon.ico"> --}}
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('wizard/css/bootstrap.min.css') }}">
<!-- Fontawesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
<!-- Fonts and icons -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet"> 
<!-- Reset CSS -->
{{-- <link rel="stylesheet" href="{{ asset('wizard/css/reset.css') }}"> --}}
{{-- toastr css --}}
<link href="{{ asset('bootstrap/css/toastr.min.css') }}" rel="stylesheet" />
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('wizard/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<!-- Responsive  CSS -->
<link rel="stylesheet" href="{{ asset('wizard/css/responsive.css') }}">
{{-- JQuery js --}}
{{-- toastr js --}}
<script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
<script src="{{ asset('bootstrap/js/toastr.min.js') }}"></script>
{{-- Phone number with country code --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
</head>
<body>

<div class="wizard-main">
	<div id="particles-js"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="title-wb">Candidate Login Form</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 banner-sec">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-block img-fluid" src="{{ asset('wizard/images/slider1.png') }}" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>Wheels2Door</h2>
									<p>We are a start-up committed to solve the problem of unemployment in our country by creating millions of Delivery resource jobs over a period of time, for male, female and third gender individuals.</p>
								</div>	
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block img-fluid" src="{{ asset('wizard/images/slider2.png') }}" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>Wheels2Door</h2>
									<p>We are a start-up committed to solve the problem of unemployment in our country by creating millions of Delivery resource jobs over a period of time, for male, female and third gender individuals.</p>
								</div>	
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block img-fluid" src="{{ asset('wizard/images/slider3.png') }}" alt="First slide">
							<div class="carousel-caption d-none d-md-block">
								<div class="banner-text">
									<h2>Wheels2Door</h2>
									<p>We are a start-up committed to solve the problem of unemployment in our country by creating millions of Delivery resource jobs over a period of time, for male, female and third gender individuals.</p>
								</div>	
							</div>
						</div>
					</div>	   
				</div>
			</div>
			<div class="col-lg-6 login-sec">
				<div class="login-sec-bg">
					<h2 class="text-center">Candidate Signup</h2>
            <form action="{{ url('/verify-otp') }}" method="POST">
              @csrf
              <h3 class="text-center p-2">Verify OTP</h3>   
						  <fieldset class="form-input">
							  @if ($errors->any())
							  <div class="alert alert-danger">
							  @foreach ($errors->all() as $error)
								{{ $error }}
							  @endforeach
							  </div>
							  @endif

							  @if (session('success'))
							  <div class="alert alert-success">
							  	{{ session('success') }}
							  </div>
							  @endif

							  @if (session('error'))
							  <div class="alert alert-danger">
							  	{{ session('error') }}
							  </div>
							  @endif
              <!-- Email input -->
                          
              <input type="number" name="otp" class="form-control required" id="otp" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" style="text-align: center" placeholder="0000"/>

              <span id="timerMsg" class="text-danger text-center mt-2">Wait 20 seconds to resend OTP</span>
              <span id="resendBtn" class="text-center mt-2" style="display:none;">
                <a href="{{ url('resend-otp?phone='.$phone.'&job_id='.$job_id.'&category_id='.$category_id.'&location_id='.$location_id.'&client_id='.$client_id) }}" class="badge bg-danger text-center text-decoration-none text-light">Resend OTP</a>
              </span>
              <input type="text" name="job_id" value="{{ $job_id }}" hidden>
              <input type="text" name="category_id" class="form-control" value="{{ $category_id ?? '' }}" hidden>
              <input type="text" name="location_id" class="form-control" value="{{ $location_id ?? '' }}" hidden>
              <input type="text" name="client_id" class="form-control" value="{{ $client_id ?? '' }}" hidden>
              <input type="text" name="enquiry_id" class="form-control" value="{{ $enquiry_id ?? '' }}" hidden>
              <input type="text" name="phone" value="{{ $phone }}" hidden>
              <button class="btn btn-warning mt-3 form-control">VERIFY OTP</button>                
            </form>
				</div>
			</div>			
		</div>

    {{-- Script for resend otp timer --}}
    <script>
      const resendBtn = document.getElementById("resendBtn");
      const timerMsg = document.getElementById("timerMsg");

      function myMessage() {
        resendBtn.style.display = "block";
        timerMsg.style.display = "none";
      }
      setTimeout(myMessage, 20000);
    </script>

		<div class="row">
			<div class="col-lg-12">
				<p class="copyright text-center">All Rights Reserved. &copy; Copyright 2022 <a href="#">Wheels2Door</a></p>			</div>
		</div>
	</div>
</div>

</body>
</html>

<!-- jquery latest version -->
<script src="{{ asset('wizard/js/jquery.min.js') }}"></script>
<!-- popper.min.js -->
<script src="{{ asset('wizard/js/popper.min.js') }}"></script>    
<!-- bootstrap js -->
<script src="{{ asset('wizard/js/bootstrap.min.js') }}"></script>
<!-- jquery.steps js -->
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script src="{{ asset('wizard/js/jquery.steps.js') }}"></script>
<!-- particles js -->
<script src="{{ asset('wizard/js/particles.js') }}"></script>