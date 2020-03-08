<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	 <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

	<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">

	<!-- <script type="text/javascript" src="{{asset('frontend/custom.js')}}"></script> -->
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

      <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">  -->
                
                <!-- </span> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="signout" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

    </ul>
  </div>
</nav>
@yield('content')
</div>
</body>
</html>