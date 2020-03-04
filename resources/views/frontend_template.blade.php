<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	 <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

	<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">

	<script type="text/javascript" src="{{asset('frontend/custom.js')}}"></script>
</head>
<body>
	<div id="banner">
	<nav class="navbar navbar-expand-lg fixed-top navbar-light">
  <a class="navbar-brand text-white" href="#">
  	<img src="{{asset('frontend/image/logo1.jpg')}}" width="100px" height="35px"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active px-3">
        <a class="nav-link text-white" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link text-white" href="#">About</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link text-white" href="#">Contact</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#cardoneModal">Sign in|Sign Up</a>
      </li>
    </ul>
  </div>
</nav>
@yield('content')
</div>
</body>
</html>