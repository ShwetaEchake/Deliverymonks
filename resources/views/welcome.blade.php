<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery Monks</title>
    {{-- @livewireStyles --}}
    <livewire:styles />
    {{-- Livewire multistep css --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap">
        {{-- Custome css --}}
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        {{-- icon --}}
        <script src="https://kit.fontawesome.com/9b3df75883.js" crossorigin="anonymous"></script>  
        {{-- toastr css --}}
        <link href="{{ asset('bootstrap/css/toastr.min.css') }}" rel="stylesheet" />
        {{-- Bootstrap js --}}
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        {{-- JQuery js --}}
        <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
        {{-- toastr js --}}
        <script src="{{ asset('bootstrap/js/toastr.min.js') }}"></script>
</head>
<body class="">
        <livewire:multi-step-form :job_id="$job_id" :category_id="$category_id" :location_id="$location_id" :client_id="$client_id" :enquiry_id="$enquiry_id" />

        {{-- Scroll to Top Button --}}
        <button onclick="topFunction()" id="myBtn" title="Go to top" class="btn"><i class="fa fa-angle-up"></i></button>
        {{-- Scroll to Top Script --}}
        <script>
            //Get the button:
            mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
{{-- @livewireScripts --}}
{{-- <livewire:scripts /> --}}
<script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
{{-- <script src="{{ asset('vendor/livewire/livewire.js.map') }}"></script> --}}


</html>

