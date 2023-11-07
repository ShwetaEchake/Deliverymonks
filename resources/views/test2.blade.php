<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>   
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> 
  <script src="{{ asset('bootstrap/js/jquery.js') }}"></script>    
</head>
<body>
<div class="container">
  <h1>Candidates</h1>
  <form action="{{ url('create-candidate') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <label for="">Profile Photo</label>
    <input type="file" name="profile" class="form-control" id="profile">
    <label for="">Aadhar Card</label>
    <input type="file" name="aadhar" class="form-control" id="aadhar">
    <label for="">Pan Card</label>
    <input type="file" name="pan" class="form-control" id="pan">
    <label for="">Driving Licence</label>
    <input type="file" name="driving" class="form-control" id="driving">
    <label for="">Passbook</label>
    <input type="file" name="passbook" class="form-control" id="passbook">
    <button class="btn btn-primary">Submit</button>
  </form>
  

</div>
</body>
</html>

{{-- <script>
  $(document).ready(function(){
    $('.btn').on("click", function(e){
      e.preventDefault();
      var profile = $('#profile').val();
      var aadhar = $('#aadhar').val();
      var pan = $('#pan').val();
      var driving = $('#driving').val();
      var passbook = $('#passbook').val();
      $.ajax({
          url:'{{ url('create-candidate') }}',
          type:'GET',
          data:{},
          success:function(data){
            // $('#suggestions').html(data);
            // console.log(data);
            // console.log(data[1]['category_name']);

            $('.listings-container').append(data);
            
          }
        });
    })
  });
</script> --}}
