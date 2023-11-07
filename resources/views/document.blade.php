<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    {{-- Custome css --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    {{-- icon --}}
    <script src="https://kit.fontawesome.com/9b3df75883.js" crossorigin="anonymous"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400%7CUbuntu:400,700%7COpen+Sans" rel="stylesheet">  
    {{-- Bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    {{-- toastr css --}}
    <link href="{{ asset('bootstrap/css/toastr.min.css') }}" rel="stylesheet" />
    {{-- Bootstrap js --}}
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- JQuery js --}}
    <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
    {{-- toastr js --}}
    <script src="{{ asset('bootstrap/js/toastr.min.js') }}"></script>
</head>
<body>
    <section class="section about-section gray-bg" id="about">
      <div class="container">
    
        <div class="row d-flex justify-content-center">
            <a href="{{ url('/logout') }}" class="button mt-2">
              <button class="btn btn-outline-danger px-4 d-block float-end"><i class="fa fa-power-off"></i> Logout</button>
            </a>
            <div class="col-md-7 mt-3">



              @if ($success != '')
                <div class="alert alert-success" id="msg" role="alert">
                  {{ $success }}
                </div>
              @else
                <div class="alert alert-danger" id="msg" role="alert">
                  {{ $fail }}
                </div>
              @endif
                
                <div class="card p-3 py-4">
                    @php
                        // Getting profile photo
                        if($document != ''){
                            $count = count($document->json());
                            for($i=0; $i<$count;$i++){
                                // Document_type_id is 1 for Profile Photo so index is 0
                                if($documentType[0]['document_type_id'] == $document[$i]['document_title']){
                                    $profile_path = $document[$i]['document_path'];
                                    break;
                                }
                                else{
                                    $profile_path = '';
                                }
                            }
                        }
                        else{
                            $profile_path = '';
                        }
                    @endphp
                    <div class="text-center">
                      @if ($profile_path != "")
                          <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$user[0]['directory_path']."/".$profile_path) }}" width="100" class="rounded-circle" title="" alt="">
                      @endif
                      @if ($profile_path == "")
                          <img src="{{ asset('uploads/nouser.png') }}" width="100" class="rounded-circle" title="" alt="">
                      @endif
                    </div>
                    
                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">ID: DM{{ $user[0]['candidate_id'] }}</span>
                        <h5 class="mt-2 mb-0">{{ $user[0]['name'] ?? 'Not Mentioned' }}</h5>
                        <span class="text-danger">Candidate</span>
                        
                        <div class="px-4 mt-1">
                            <p class="fonts">
                              Birthday : {{ $user[0]['date_of_birth'] ? $user[0]['date_of_birth'] : "Not Mentioned" }}
                              <br>
                              Age : {{ $user[0]['age'] != 0 ? $user[0]['age'].'Yr' : "Not Mentioned" }}
                              <br>
                              Gender : {{ $user[0]['gender'] ?? 'Not Mentioned' }}
                              <br>
                              Phone : {{ $user[0]['mobile_no'] ?? 'Not Mentioned' }}
                              <br>
                              @php
                                $url = 'http://45.79.124.136/Deliveryboy/API/V1/getLocations';
                                $location = Http::asForm()->post($url, [
                                  'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                                ]);
                                $city_id = $user[0]['city_id'];
                                $location = $location->json();
                              
                              @endphp
                              City : {{ $location[$city_id]['location_name'] ?? 'Not Mentioned'; }}
                              <br>
                              Location : {{ $user[0]['location'] ?? 'Not Mentioned' }}
                              <br>
                              Address : {{ $user[0]['address'] ? $user[0]['address'] : "Not Mentioned" }}
                              <br>
                              Zip : {{ $user[0]['zipcode'] ?? 'Not Mentioned' }}
                              <br>
                            </p>
                        </div>
                        
                        <div class="buttons">
                            <button class="btn btn-outline-primary px-4" data-bs-toggle="modal" data-bs-target="#profile_photo">Change Profile Picture</button>
                        </div>
                          
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
  
        <div class="container mt-5">
            {{-- <div class="counter shadow-lg">
                <div class="row">
                    <div class="col-sm-9">
                        <a href="{{ url('file-upload/resume/') }}" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#resume">
                            <div class="col-lg-12">
                                <h3>
                                    @php
                                      // Getting Resume
                                      if($document != ''){
                                          $count = count($document->json());
                                          for($i=0; $i<$count;$i++){
                                              // Document_type_id is 6 for Resume so index is 5
                                              if($documentType[5]['document_type_id'] == $document[$i]['document_title']){
                                                  $resume_path = $document[$i]['document_path'];
                                                  break;
                                              }
                                              else{
                                                  $resume_path = '';
                                              }
                                          }
                                      }
                                      else{
                                          $resume_path = '';
                                      }
                                    @endphp
                                    @if ($resume_path == '')
                                        <img src="{{ asset('uploads/uncheck.png') }}" height="30px" width="30px" class="p-1">
                                    @else
                                        <img src="{{ asset('uploads/check.png') }}" height="30px" width="30px" class="p-1">
                                    @endif
                                    Resume
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#resume_preview"><i class="fa-solid fa-eye"></i> Preview</a>
                        <a href="{{ url('print/resume') }}" class="btn btn-info"><i class="fa-solid fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
            <br> --}}
            <div class="counter shadow-lg">
                <div class="row">
                    <div class="col-sm-9">
                        <a href="{{ url('file-upload/aadhar-card/') }}" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#aadhar_card">
                            <div class="col-lg-12">
                                <h3>
                                    @php
                                      // Getting Aadhar Card
                                      if($document != ''){
                                          $count = count($document->json());
                                          for($i=0; $i<$count;$i++){
                                              // Document_type_id is 2 for Aadhar so index is 1
                                              if($documentType[1]['document_type_id'] == $document[$i]['document_title']){
                                                  $aadhar_path = $document[$i]['document_path'];
                                                  break;
                                              }
                                              else{
                                                  $aadhar_path = '';
                                              }
                                          }
                                      }
                                      else{
                                          $aadhar_path = '';
                                      }
                                    @endphp
                                    @if ($aadhar_path == '')
                                        <img src="{{ asset('uploads/uncheck.png') }}" height="30px" width="30px" class="p-1">
                                    @else
                                        <img src="{{ asset('uploads/check.png') }}" height="30px" width="30px" class="p-1">
                                    @endif
                                    {{-- <i class="fa fa-file-photo-o"></i> --}}
                                    Aadhar Card
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#aadhar_card_preview"><i class="fa-solid fa-eye"></i> Preview</a>
                        <a href="{{ url('print/aadhar-card') }}" class="btn btn-info"><i class="fa-solid fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="counter shadow-lg">
                <div class="row">
                    <div class="col-sm-9">
                        <a href="{{ url('file-upload/pan-card/') }}" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#pan_card">
                            <div class="col-lg-12">
                                <h3>
                                    @php
                                      // Getting Pan Card
                                      if($document != ''){
                                          $count = count($document->json());
                                          for($i=0; $i<$count;$i++){
                                              // Document_type_id is 3 for Pan so index is 2
                                              if($documentType[2]['document_type_id'] == $document[$i]['document_title']){
                                                  $pan_path = $document[$i]['document_path'];
                                                  break;
                                              }
                                              else{
                                                  $pan_path = '';
                                              }
                                          }
                                      }
                                      else{
                                          $pan_path = '';
                                      }
                                    @endphp
                                    @if ($pan_path == '')
                                        <img src="{{ asset('uploads/uncheck.png') }}" height="30px" width="30px" class="p-1">
                                    @else
                                        <img src="{{ asset('uploads/check.png') }}" height="30px" width="30px" class="p-1">
                                    @endif
                                    Pan Card
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#pan_card_preview"><i class="fa-solid fa-eye"></i> Preview</a>
                        <a href="{{ url('print/pan-card') }}" class="btn btn-info"><i class="fa-solid fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="counter shadow-lg">
                <div class="row">
                    <div class="col-sm-9">
                        <a href="{{ url('file-upload/driving-licence/') }}" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#driving_licence">
                            <div class="col-lg-12">
                                <h3>
                                    @php
                                      // Getting Driving Licence
                                      if($document != ''){
                                          $count = count($document->json());
                                          for($i=0; $i<$count;$i++){
                                              // Document_type_id is 4 for Profile Photo so index is 3
                                              if($documentType[3]['document_type_id'] == $document[$i]['document_title']){
                                                  $driving_path = $document[$i]['document_path'];
                                                  break;
                                              }
                                              else{
                                                  $driving_path = '';
                                              }
                                          }
                                      }
                                      else{
                                          $driving_path = '';
                                      }
                                    @endphp
                                    @if ($driving_path == '')
                                        <img src="{{ asset('uploads/uncheck.png') }}" height="30px" width="30px" class="p-1">
                                    @else
                                        <img src="{{ asset('uploads/check.png') }}" height="30px" width="30px" class="p-1">
                                    @endif
                                    Driving Licence
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#driving_licence_preview"><i class="fa-solid fa-eye"></i> Preview</a>
                        <a href="{{ url('print/driving-licence') }}" class="btn btn-info"><i class="fa-solid fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="counter shadow-lg mb-5">
                <div class="row">
                    <div class="col-sm-9">
                        <a href="{{ url('file-upload/passbook/') }}" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#passbook">
                            <div class="col-lg-12">
                                <h3>
                                    @php
                                      // Getting Passbook
                                      if($document != ''){
                                          $count = count($document->json());
                                          for($i=0; $i<$count;$i++){
                                              // Document_type_id is 5 for Passbook so index is 4
                                              if($documentType[4]['document_type_id'] == $document[$i]['document_title']){
                                                  $passbook_path = $document[$i]['document_path'];
                                                  break;
                                              }
                                              else{
                                                $passbook_path = '';
                                              }
                                          } 
                                      }
                                      else{
                                          $passbook_path = '';
                                      }
                                    @endphp
                                    @if ($passbook_path == '')
                                        <img src="{{ asset('uploads/uncheck.png') }}" height="30px" width="30px" class="p-1">
                                    @else
                                        <img src="{{ asset('uploads/check.png') }}" height="30px" width="30px" class="p-1">
                                    @endif
                                    Passbook
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#passbook_preview"><i class="fa-solid fa-eye"></i> Preview</a>
                        <a href="{{ url('print/passbook') }}" class="btn btn-info"><i class="fa-solid fa-print"></i> Print</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Scroll to Top Button --}}
    <button onclick="topFunction()" id="myBtn" title="Go to top" class="btn btn-outline-danger"><i class="fa fa-angle-up"></i></button>
    {{-- Scroll to Top Script --}}
    <script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
</body>
</html>

@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{ $error }}')
    </script>
@endforeach
@endif

@if(session('success'))
<script>
    toastr.success('{{ session('success') }}')
</script>
@endif

@if(session('error'))
<script>
    toastr.error('{{ session('error') }}')
</script>
@endif


{{-- file Upload Modals --}}
<!-- Resume Modal -->
<div class="modal fade" id="resume" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ url('/file-upload/resume') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><i class="fa fa-file-pdf-o"></i> Upload Resume</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <span class="text-success">
                  <ol>
                    <li>Resume should be a pdf file.</li>
                    <li>File size must be less than 3MB.</li>
                  </ol>
                </span>
                <input type="file" name="file" class="form-control">
              </div>
              <div class="modal-footer">
                <button type="button" id="btnResume" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Aadhar Modal -->
  <div class="modal fade" id="aadhar_card" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ url('/file-upload/aadhar-card') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"><i class="fa fa-file-image-o"></i> Upload Aadhar Card</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span class="text-success">
                <ol>
                  <li>Aadhar Card should be a image file(JPG, JPEG & PNG).</li>
                  <li>File size must be less than 2MB.</li>
                </ol>
              </span>
              <input type="file" name="file" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Pan Card Modal -->
  <div class="modal fade" id="pan_card" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ url('/file-upload/pan-card') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"><i class="fa fa-file-image-o"></i> Upload Pan Card</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span class="text-success">
                <ol>
                  <li>Pan Card should be a image file(JPG, JPEG & PNG).</li>
                  <li>File size must be less than 2MB.</li>
                </ol>
              </span>
              <input type="file" name="file" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Driving Licence Modal -->
  <div class="modal fade" id="driving_licence" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ url('/file-upload/driving-licence') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"><i class="fa fa-file-image-o"></i> Upload Driving Licence</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span class="text-success">
                <ol>
                  <li>Driving Licence should be a image file(JPG, JPEG & PNG).</li>
                  <li>File size must be less than 2MB.</li>
                </ol>
              </span>
              <input type="file" name="file" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Passbook Modal -->
  <div class="modal fade" id="passbook" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ url('/file-upload/passbook') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"><i class="fa fa-file-image-o"></i> Upload Passbook</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <span class="text-success">
                  <ol>
                    <li>Passbook should be a image file(JPG, JPEG & PNG).</li>
                    <li>File size must be less than 2MB.</li>
                  </ol>
                </span>
                <input type="file" name="file" class="form-control">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
        </form>
      </div>
    </div>
  </div>

{{-- Preview Modals --}}
<!-- Preview Resume Modal -->
{{-- <div class="modal fade" id="resume_preview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="staticBackdropLabel"><i class="fa fa-file-pdf-o"></i> Preview Resume</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="justify-content-center align-items-center">
                @if ($resume_path != '')
                    <iframe src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$user[0]['directory_path']."/".$resume_path) }}" frameborder="0" class="img-fluid"></iframe>
                @else
                    <div class="alert alert-danger" role="alert">
                        No Document Uploaded
                    </div>
                @endif
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnResume" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div> --}}

  <!-- Preview Aadhar Modal -->
<div class="modal fade" id="aadhar_card_preview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="staticBackdropLabel"><i class="fa fa-file-image-o"></i> Preview Aadhar Card</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="justify-content-center align-items-center">
                @if ($aadhar_path != '')
                    <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$user[0]['directory_path']."/".$aadhar_path) }}" class="img-fluid" alt="">
                @else
                    <div class="alert alert-danger" role="alert">
                        No Document Uploaded
                    </div>
                @endif
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnResume" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>

  <!-- Preview Pan Card Modal -->
<div class="modal fade" id="pan_card_preview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="staticBackdropLabel"><i class="fa fa-file-image-o"></i> Preview Pan Card</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="justify-content-center align-items-center">
                @if ($pan_path != '')
                    <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$user[0]['directory_path']."/".$pan_path) }}" class="img-fluid" alt="">
                @else
                    <div class="alert alert-danger" role="alert">
                        No Document Uploaded
                    </div>
                @endif
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnResume" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>

  <!-- Preview Driving Licence Modal -->
<div class="modal fade" id="driving_licence_preview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="staticBackdropLabel"><i class="fa fa-file-image-o"></i> Preview Driving Licence</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="justify-content-center align-items-center">
                @if ($driving_path != '')
                    <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$user[0]['directory_path']."/".$driving_path) }}" class="img-fluid" alt="">
                @else
                    <div class="alert alert-danger" role="alert">
                        No Document Uploaded
                    </div>
                @endif
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnResume" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>

  <!-- Preview Passbook Modal -->
<div class="modal fade" id="passbook_preview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-primary" id="staticBackdropLabel"><i class="fa fa-file-image-o"></i> Preview Passbook</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="justify-content-center align-items-center">
                @if ($passbook_path != '')
                  <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$user[0]['directory_path']."/".$passbook_path) }}" class="img-fluid">
                @else
                    <div class="alert alert-danger" role="alert">
                        No Document Uploaded
                    </div>
                @endif
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnResume" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>


  <!-- Profile Photo Modal -->
  <div class="modal fade" id="profile_photo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form action="{{ url('/profile/change-profile_photo') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel"><i class="fa fa-photo"></i> Change Profile Photo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span class="text-success">
                <ol>
                  <li>Profile Photo should be a image file(JPG, JPEG & PNG).</li>
                  <li>File size must be less than 2MB.</li>
                </ol>
              </span>
              <input type="file" name="file" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Change</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
<script>
	$(document).ready(function(){
		function loaddata(status){
      $('#msg').show().delay(5000).fadeOut();
    }

		loaddata();

	});
</script>