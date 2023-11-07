<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>  
  @include('Portal.includes.styles')
  @include('Portal.includes.scripts')
  {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">  --}}
  <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
</head>
<body>
<div class="container">
  <div class="eleven columns">
    <div class="padding-right">
      <h3 class="margin-bottom-25">Recent Jobs</h3>
      <div class="listings-container">
        <!-- Job listing here using ajax -->
      </div>
  
      <a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
      <div id="msg"></div>
      <div class="margin-bottom-55"></div>
    </div>
    </div>
  
    <!-- Job Spotlight -->
    <div class="five columns">
      <h3 class="margin-bottom-5">Job Spotlight</h3>
  
      <!-- Navigation -->
      <div class="showbiz-navigation">
        <div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
        <div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
      </div>
      <div class="clearfix"></div>
      
      <!-- Showbiz Container -->
      <div id="job-spotlight" class="showbiz-container">
        <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
          <div class="overflowholder">
  
            <ul id="spotlight">
              
            </ul>
            <div class="clearfix"></div>
  
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
  
    </div>

</div>

{{-- <script>
  $(document).ready(function(){
      function loadtable(status){
        $.ajax({
          url:'{{ url('test2') }}',
          type:'GET',
          data:{status},
          success:function(data){
            // $('#suggestions').html(data);
            // console.log(data);
            // console.log(data[1]['category_name']);

            var count = data.length;
            for(var i = 0; i < count; i++){
              // if(i == 5){
              //   break;
              // }
              var output = '<a href="job-page/category_id='+data[i]['category_id']+'&job_id='+data[i]['job_id']+'"class="listing full-time">"'+
          '<div class="listing-logo">'+
            '<img src="http://45.79.124.136/Deliveryboy/admin/public/documents/'+data[i]['folder_path']+'/'+data[i]['client_logo']+'" alt="">'+
          '</div>'+
          '<div class="listing-title">'+
            '<h4>'+data[i]['category_name']+'<span class="listing-type">Full-Time</span></h4>'+
            '<ul class="listing-icons">'+
              '<li><i class="ln ln-icon-Management"></i> '+data[i]['company_name']+'</li>'+
              '<li><i class="ln ln-icon-Map2"></i>  7th Avenue, New York, NY, United States</li>'+
              '<li><i class="ln ln-icon-Money-2"></i> $'+data[i]['basic_salary']+'</li>'+
              '<li><div class="listing-date new">new</div></li>'+
            '</ul>'+
          '</div>'+
        '</a>';
        $('.listings-container').append(output);
            }
            
          }
        });
      }

      loadtable();
  });
</script> --}}

<script>
  $(document).ready(function(){
      function loadtable(status){
        $.ajax({
          url:'{{ url('test2') }}',
          type:'GET',
          data:{status},
          success:function(data){
            // $('#suggestions').html(data);
            // console.log(data);
            // console.log(data[1]['category_name']);

            $('.listings-container').append(data.output);
            console.log(data.job_spotlight);
            $('#spotlight').append(data.job_spotlight)
          }
        });
      }

      loadtable();
  });
</script>


</body>
</html>