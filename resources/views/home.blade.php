<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delivery Monks</title>
    {{-- icon --}}
    <script src="https://kit.fontawesome.com/9b3df75883.js" crossorigin="anonymous"></script>  
    {{-- Custome css --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/et-line.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400%7CUbuntu:400,700%7COpen+Sans" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon-32x32.png') }}">
    <!-- Script -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    {{-- JQuery --}}
    <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.localScroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/plyr.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
      $(document).ready(function(){
        $(".app-button").click(function(){
          $("iframe").toggle();
          $("button").val('close');
        });
      });
      </script>
</head>
<body>

{{-- Iframe Toggler --}}
  <iframe src="{{ url('/login') }}" width="300" height="75%" frameborder="0" allowTransparency="true" style="border: none;position:fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);box-shadow:0px 0px 12px gray;display:none;z-index:99;"></iframe>
  <div class="button-group">
    <button  class="btn btn-lg app-button" style=""><i class="fa fa-user"></i> Register</button>
  </div>

</body>
</html>