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
        <a class="nav-link text-white" href="aboutus">About</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link text-white" href="contact">Contact</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link text-white" href="{{route('frontendregister')}}">Register</a>
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
<div class="container" id="navtitle">
  <div class="row justify-content-center text-center">
    <div class="col-10">
    <h1 class="diplay-4 text-white">WELCOME TO WEB DEVELOPER BOOTCAMP</h1>
    <hr class="my-5" id="divider">
    </div>
    <div class="col-8">
      <p class="text-white justify-content-center text-center" >
      We Are Professional WEB Developer
      </p>
      <div class="mt-4">
        <a href="{{route('frontendregister')}}" class="btn btn-warning">Register</a>
        <a href="{{route('home')}}" class="btn btn-outline-warning">Login</a>
      </div>
      <div class="mt-4">
        
      </div>
    </div>
    
  </div>
</div>
</div>
<div class="container-fluid my-5" style="background-color: #FAFAFA">
   <h1 class="font text-center">Other Courses</h1>
    <!-- <hr class="my-5" id="divider1"> -->
    <p class="text-center font">Training Service and Software Development Service.</p>
  <div class="row">
     @foreach($courses as $course)
    <div class="col-lg-3 card my-5 mx-5">
      <div class="card-body">
      <p class="card-img-top"><img src="{{asset($course->logo)}}" class="img-fluid"></p>
      <p class="text-center">{{$course->name}}</p>
      </div>
    </div>
    @endforeach
  </div> 
</div>

<div id="counter">
  <div class="container p-5">
    <div class="row text-white text-center">
<div class="col-lg-4 col-md-12 col-sm-12">
        <h3>10</h3>
        <p>Clients</p>
      </div>
<div class="col-lg-4 col-md-12 col-sm-12">
        <h1>10</h1>
        <p>Training Courses</p>
      </div>

<div class="col-lg-4 col-md-12 col-sm-12">
        <h1>4</h1>
        <p>Services</p>
      </div>

    </div>
  </div>
</div>


<hr>
  <div class="container" style="position: absolute; margin-left: 100px;">
    <div class="row">
      <div class="col-lg-3">
        <ul class="list-unstyled">
          <li>Support</li>
          <li>About Us</li>
          <li>Contact Us</li>
          <li>Inside LMS</li>
          <li>What's new</li>
        </ul>
      </div>

      <div class="col-lg-3">
        <ul class="list-unstyled">
          <li>Need Help?</li>
          <li>About Us</li>
          <li>Contact Us</li>
          <li>Courses</li>
          <li>New Advance</li>
        </ul>
      </div>


      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12">
            <p>Contact List:<p>
              <i class="fas fa-map-marker-alt"></i>
              No.169/7B,MTP Condo, Insein Road , Hlaing Township, Yangon
            </div>
            <div class="col-lg-12">
              <i class="fas fa-phone"></i>
              +95 9 259288199
            </div>
            <div class="col-lg-12">
              <i class="fas fa-envelope-open-text"></i>
              info@myanmaritc.com
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <ul class="list-unstyled">
            <li class="font"><i class="fas fa-graduation-cap" style="color:gray;"></i> Learning Management System</li>
            <li>lms-batch14@org.com</li>
            <li><i class="fab fa-facebook" style="color:#3b5998;"></i> <i class="fab fa-twitter-square" style="color:#00acee;"></i> 
              <i class="fab fa-instagram" style="color:#C13584;"></i></li>    
            </ul>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <hr>
              <p class="text-center"><i class="fas fa-copyright" style="color:gray;"></i>    Myanmar IT Consulting || Web Developer Bootcamp</p>
            </div>
          </div>
        </div>

      </div>

</body>
</html>


