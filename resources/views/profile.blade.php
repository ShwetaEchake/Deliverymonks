<!DOCTYPE html>
<html lang="en">
<head>
<title> Wheels2Door</title>
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
<link rel="stylesheet" href="{{ asset('wizard/css/reset.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('wizard/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<!-- Responsive  CSS -->
<link rel="stylesheet" href="{{ asset('wizard/css/responsive.css') }}">
</head>
<body>

<div class="wizard-main">
	<div id="particles-js"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="title-wb">Candidate Detail Form</h2>
				<a href="{{ url('/logout') }}" class="button mt-2">
                    <button class="btn btn-outline-light px-4 d-block" style="margin: auto"><i class="fa fa-power-off"></i> Logout</button>
                </a>
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
					<h2 class="text-center">Candidate Information</h2>
					<form id="example-advanced-form" action="#" style="display: none;">
						<h3>Language</h3>
						<fieldset class="form-input">
							<h4>Choose Your Language</h4>

                            <div class="row mt-3 justify-content-center">
                                <label>
                                    <input type="radio" class="radiobtn" id="language" name="language" value="English" checked>
                                    <img src="{{ asset('uploads/en.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        English
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn" id="language" name="language" value="Hindi">
                                    <img src="{{ asset('uploads/hi.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Hindi
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn" id="language" name="language" value="Marathi">
                                    <img src="{{ asset('uploads/hi.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Marathi
                                    </p>
                                  </label>
                            </div>

							{{-- <input id="userName" name="userName" type="text" class="form-control required">
							<label for="password">Password *</label>
							<input id="password" name="password" type="text" class="form-control required">
							<label for="confirm">Confirm Password *</label>
							<input id="confirm" name="confirm" type="text" class="form-control required">
							<p>(*) Mandatory</p> --}}
						</fieldset>

						<h3>Vehicle</h3>
						<fieldset class="form-input">
							<h4>Choose Your Vehicle</h4>

                            <div class="row mt-3 justify-content-center">
                                <label>
                                    <input type="radio" class="radiobtn required" id="vehicle" name="vehicle" value="truck">
                                    <img src="{{ asset('uploads/truck.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Truck
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn required" id="vehicle" name="vehicle" value="bike">
                                    <img src="{{ asset('uploads/bike.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Bike
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn required" id="vehicle" name="vehicle" value="cycle">
                                    <img src="{{ asset('uploads/cycle.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Cycle
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn required" id="vehicle" name="vehicle" value="trolley">
                                    <img src="{{ asset('uploads/tempo.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Tempo
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn required" id="vehicle" name="vehicle" value="walk">
                                    <img src="{{ asset('uploads/walk.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Walk
                                    </p>
                                  </label>
                            </div>

							{{-- <label for="name">First name *</label>
							<input id="name" name="name" type="text" class="form-control required">
							<label for="surname">Last name *</label>
							<input id="surname" name="surname" type="text" class="form-control required">
							<label for="email">Email *</label>
							<input id="email" name="email" type="text" class="form-control form-controlrequired email">
							<label for="address">Address</label>
							<input id="address" name="address" type="text" class="form-control">
							<label for="age">Age (The warning step will show up if age is less than 18) *</label>
							<input id="age" name="age" type="text" class="form-control required number">
							<p>(*) Mandatory</p> --}}
						</fieldset>

						<h3>Interest</h3>
						<fieldset class="form-input">
							<h4>Choose Your Interest</h4>
                            <div class="row mt-3 justify-content-center">
                                <label>
                                    <input type="checkbox" class="chkbox required" id="interest" name="interest" value="Document Delivery">
                                    <img src="{{ asset('uploads/document.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Document
                                    </p>
                                </label>
                                <label>
                                    <input type="checkbox" class="chkbox required" id="interest" name="interest" value="Food Delivery">
                                    <img src="{{ asset('uploads/food.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Food
                                    </p>
                                </label>
                                <label>
                                    <input type="checkbox" class="chkbox required" id="interest" name="interest" value="Grocery Delivery">
                                    <img src="{{ asset('uploads/grocery.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Grocery
                                    </p>
                                </label>
                                <label>
                                    <input type="checkbox" class="chkbox required" id="interest" name="interest" value="Parcel Delivery">
                                    <img src="{{ asset('uploads/parcel.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Parcel
                                    </p>
                                </label>
                                <label>
                                    <input type="checkbox" class="chkbox required" id="interest" name="interest" value="Medicine Delivery">
                                    <img src="{{ asset('uploads/medicine.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Medicine
                                    </p>
                                </label>
                            </div>
						</fieldset>

                        <h3>Address</h3>
						<fieldset class="form-input">
							<h4>Enter Your Address</h4>

                            {{-- <div class="row mt-3 justify-content-center"> --}}
                                <div class="row mt-3">
                                    <label class="font-weight-bold">Select City:</label> 
                                    <select id="city" name="city" class="form-control required">
                                        <option value="" selected>Select City</option>
                                        @php
                                            $url = "http://45.79.124.136/Deliveryboy/API/V1/getLocations";
                                            $city = Http::asForm()->post($url, [
                                                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                                                'candidate_id' => session('candidate_id'),
                                            ]);
                                            $city_count = count($city->json());
                                        @endphp
                                        @for ($i = 0; $i < $city_count; $i++)
                                            <option value="{{ $city[$i]['location_id']; }}">{{ $city[$i]['location_name']; }}</option>
                                        @endfor
                                    </select>

									<label class="font-weight-bold">Select Location:</label>
									<select name="location" id="location" class="form-control required">
										<option value="">Select Location</option>
									</select>
									<script>
										$('#city').on("change",function(){
											var city = $(this).val();
											$.ajax({
												url:'{{ url('get-zones') }}',
												type:'GET',
												data:{city:city},
												success:function(data){
													$('#location').empty().append(data.output);
												}
											});
										});
									</script>
                                    
                                    <label class="font-weight-bold">Address</label>
                                    <input type="text" id="address" name="address" class="form-control required" placeholder="Enter Your Address">
                                    <label class="font-weight-bold">Zip</label>
                                    <input type="number" id="zip" name="zip" class="form-control required" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" placeholder="Zip">
                                </div>
                            {{-- </div> --}}

							{{-- <input id="userName" name="userName" type="text" class="form-control required">
							<label for="password">Password *</label>
							<input id="password" name="password" type="text" class="form-control required">
							<label for="confirm">Confirm Password *</label>
							<input id="confirm" name="confirm" type="text" class="form-control required">
							<p>(*) Mandatory</p> --}}
						</fieldset>

						<h3>Personal Detail</h3>
						<fieldset class="form-input">
							<h4>Enter Your Personal Details</h4>
                            <div class="row mt-3 justify-content-center">
                                    <label>
                                        <input type="radio" class="radiobtn required" id="gender" name="gender" value="Male">
                                        <img src="{{ asset('uploads/male.png') }}" class="rounded mx-auto d-block" style="height: 50px; width: 50px;">
                                        <p class="text-center font-weight-bold mb-1">
                                            Male
                                        </p>
                                    </label>
                                        <label>
                                        <input type="radio" class="radiobtn required" id="gender" name="gender"value="Female">
                                        <img src="{{ asset('uploads/female.png') }}" class="rounded mx-auto d-block" style="height: 50px; width: 50px;">
                                        <p class="text-center font-weight-bold mb-1">
                                            Female
                                        </p>
                                    </label>
                                        <label>
                                        <input type="radio" class="radiobtn required" id="gender" name="gender" value="Other">
                                        <img src="{{ asset('uploads/transgender.png') }}" class="rounded mx-auto d-block" style="height: 50px; width: 50px;">
                                        <p class="text-center font-weight-bold mb-1">
                                            Other
                                        </p>
                                    </label>
                            </div>
                                <hr class="bg-danger">
                                <div class="container mt-3">
                                <div class="row">
                                    <br>
                                    <label class="fieldlabels">Full Name:</label> 
                                    <input type="text" id="name" name="name" class="form-control required" placeholder="Enter Your Name">
                                    <label class="fieldlabels">Date of Birth:</label>
                                    <input type="date" id="dob" name="dob" max="2004-12-31" class="form-control required" placeholder="Enter Your Age">
                                </div>
                            </div>
						</fieldset>
						<input type="hidden" id="job_id" value="{{ $job_id }}">
						<input type="hidden" id="category_id" value="{{ $category_id }}">
						<input type="hidden" id="location_id" value="{{ $location_id }}">
						<input type="hidden" id="client_id" value="{{ $client_id }}">
						<input type="hidden" id="enquiry_id" value="{{ $enquiry_id }}">
					</form>			
				</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="copyright text-center">All Rights Reserved. &copy; Copyright 2022 <a href="#">Wheels2Door</a></p>			</div>
		</div>
	</div>
</div>

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
<script type="text/javascript">
	$(document).ready(function() {
		particlesJS("particles-js", 
			{
			  "particles": {
				"number": {
				  "value": 160,
				  "density": {
					"enable": true,
					"value_area": 800
				  }
				},
				"color": {
				  "value": "#ffffff"
				},
				"shape": {
				  "type": "circle",
				  "stroke": {
					"width": 0,
					"color": "#000000"
				  },
				  "polygon": {
					"nb_sides": 5
				  },
				  "image": {
					"src": "img/github.svg",
					"width": 100,
					"height": 100
				  }
				},
				"opacity": {
				  "value": 1,
				  "random": true,
				  "anim": {
					"enable": true,
					"speed": 1,
					"opacity_min": 0,
					"sync": false
				  }
				},
				"size": {
				  "value": 3,
				  "random": true,
				  "anim": {
					"enable": false,
					"speed": 4,
					"size_min": 0.3,
					"sync": false
				  }
				},
				"line_linked": {
				  "enable": false,
				  "distance": 150,
				  "color": "#ffffff",
				  "opacity": 0.4,
				  "width": 1
				},
				"move": {
				  "enable": true,
				  "speed": 1,
				  "direction": "none",
				  "random": true,
				  "straight": false,
				  "out_mode": "out",
				  "bounce": false,
				  "attract": {
					"enable": false,
					"rotateX": 600,
					"rotateY": 600
				  }
				}
			  },
			  "interactivity": {
				"detect_on": "canvas",
				"events": {
				  "onhover": {
					"enable": true,
					"mode": "bubble"
				  },
				  "onclick": {
					"enable": true,
					"mode": "repulse"
				  },
				  "resize": true
				},
				"modes": {
				  "grab": {
					"distance": 400,
					"line_linked": {
					  "opacity": 1
					}
				  },
				  "bubble": {
					"distance": 250,
					"size": 0,
					"duration": 2,
					"opacity": 0,
					"speed": 3
				  },
				  "repulse": {
					"distance": 400,
					"duration": 0.4
				  },
				  "push": {
					"particles_nb": 4
				  },
				  "remove": {
					"particles_nb": 2
				  }
				}
			  },
			  "retina_detect": true
			}
    	);
	});
</script>

<script>
	var form = $("#example-advanced-form").show();

	form.steps({
		headerTag: "h3",
		bodyTag: "fieldset",
		transitionEffect: "slideLeft",
		onStepChanging: function (event, currentIndex, newIndex)
		{
			// Allways allow previous action even if the current form is not valid!
			if (currentIndex > newIndex)
			{
				return true;
			}
			// Forbid next action on "Warning" step if the user is to young
			if (newIndex === 3 && Number($("#age").val()) < 18)
			{
				return false;
			}
			// Needed in some cases if the user went back (clean up)
			if (currentIndex < newIndex)
			{
				// To remove error styles
				form.find(".body:eq(" + newIndex + ") label.error").remove();
				form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
			}
			form.validate().settings.ignore = ":disabled,:hidden";
			return form.valid();
		},
		onStepChanged: function (event, currentIndex, priorIndex)
		{
			// Used to skip the "Warning" step if the user is old enough.
			if (currentIndex === 2 && Number($("#age").val()) >= 18)
			{
				form.steps("next");
			}
			// Used to skip the "Warning" step if the user is old enough and wants to the previous step.
			if (currentIndex === 2 && priorIndex === 3)
			{
				form.steps("previous");
			}
		},
		onFinishing: function (event, currentIndex)
		{
			form.validate().settings.ignore = ":disabled";
			return form.valid();
		},
		onFinished: function (e,event, currentIndex)
		{

			e.preventDefault();

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			var language = $('#language').val();
			var vehicle = $('#vehicle').val();
			var interest = [];

			// Initializing array with Checkbox checked values
			$("#interest:checked").each(function(){
				interest.push(this.value);
			});
			var city = $('#city').val();
			var address = $('#address').val();
			var zip = $('#zip').val();
			var gender = $('#gender').val();
			var name = $('#name').val();
			// $("#dob").datepicker({
			// 	maxDate: "-18Y"
			// });
			var dob = $('#dob').val();

			var category_id = $('#category_id').val();
			var job_id = $('#job_id').val();
			var location_id = $('#location_id').val();
			var client_id = $('#client_id').val();
			var enquiry_id = $('#enquiry_id').val();

			$.ajax({
				url:'{{ url('set-candidate-detail') }}',
				type:'GET',
				data:{language:language,vehicle:vehicle,interest:interest,city:city,address:address,zip:zip,gender:gender,name:name,dob:dob,category_id:category_id,job_id:job_id,location_id:location_id,client_id:client_id,enquiry_id:enquiry_id},
				success:function(data){
					console.log(data);
					if(data == 'success'){
						window.location = 'profile?job_id='+job_id+'&category_id='+category_id+'&location_id='+location_id+'&client_id='+client_id+'&enquiry_id='+enquiry_id;
					}else{
						alert('Something went wrong');
					}
				}
			});
		}
	}).validate({
		errorPlacement: function errorPlacement(error, element) { element.before(error); },
		rules: {
			confirm: {
				equalTo: "#password"
			}
		}
	});
</script>

</body>
</html>