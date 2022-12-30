<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> -->
 <!-- Bootstrap CSS -->
 <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
       <!-- Bootstrap Bundle with Popper -->
       <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>