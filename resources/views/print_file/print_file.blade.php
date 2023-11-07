<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body class="bg-dark">
    @if (Request::path() == 'print/resume')
    <iframe src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$getCandidateDetail[0]['directory_path']."/".$document_path) }}" frameborder="0" height="300"></iframe>
    @endif
    <div class="container mt-5">
        @if (Request::path() == "print/aadhar-card")
        <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$getCandidateDetail[0]['directory_path']."/".$document_path) }}" class="img-fluid rounded mx-auto d-block" alt="">
        @endif
        @if (Request::path() == "print/pan-card")
        <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$getCandidateDetail[0]['directory_path']."/".$document_path) }}" class="img-fluid rounded mx-auto d-block" alt="">
        @endif
        @if (Request::path() == "print/driving-licence")
        <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$getCandidateDetail[0]['directory_path']."/".$document_path) }}" class="img-fluid rounded mx-auto d-block" alt="">
        @endif
        @if (Request::path() == "print/passbook")
        <img src="{{ asset('http://45.79.124.136/Deliveryboy/admin/public/documents/Candidate/'.$getCandidateDetail[0]['directory_path']."/".$document_path) }}" class="img-fluid rounded mx-auto d-block" alt="">
        @endif
        <form>
            <input type="button" class="btn btn-outline-light rounded-pill mt-3" style="margin:auto" value="Go back!" onclick="history.back()">
        </form>
    </div>

<!-- Page specific script -->
<script>
    window.addEventListener("load", window.print());
</script>

</body>
</html>