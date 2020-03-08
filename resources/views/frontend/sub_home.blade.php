<!DOCTYPE html>
<html>
<head>
	<title>Subject_Home</title>
  
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

  <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">

  <script type="text/javascript" src="{{asset('frontend/custom.js')}}"></script>
</head>
<body>
  <div id="subject">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand text-white font border rounded-pill border-warning p-2" href="#" style="font-size: x-large;">Khaing Myint San Oo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active px-4 text-white" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link px-4 text-white" href="#">Subjects</a>
          <a class="nav-item nav-link px-4 text-white" href="#">Teachers/Mentors</a>
          <a class="nav-item nav-link px-4 text-white" href="#">Events</a>
        </div>
      </div>
    </nav>

    <div class="container" style="padding-top: 200px;">
      <div class="row justify-content-center text-center">
        <div class="col-10">
          <h3 class="text-white font">Welcome Bootcamper!</h3><br>
           <h3 class="text-white justify-content-center text-center">WE ARE TRAINERS OF PHP WEB DEVELOPER BOOTCAMP!</h3><br>
           <a href="#" class="btn btn-danger rounded font btn-lg">Tell Me More</a>
        </div>
      </div>
    </div>



  </div>




  <div class="container-fluid my-3">
    <div class="row">
      <div class="col-lg-12">
      <!-- <h2 class="text-center">Welcome Bootcamper!</h2>
        <h5 class="text-center"> We Are Trainer Of PHP Web Developer Bootcamp!!!</h5> -->
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      @foreach($trainers as $trainer) 
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <img class="card-img-top" src="{{$trainer->avatar}}" alt="">
            <h4 class="card-title text-center my-2">{{$trainer->user->name}}</h4>
          </div>
          <div class="card-footer">
            <a href="{{route('detail_subject',$trainer->id)}}" class="btn btn-outline-danger btn-block">Show Subjects</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  

<div id="counter3">
  <div class="container p-5">
    <div class="row text-white text-center">
<div class="col-lg-4 col-md-12 col-sm-12">
        <h3>3</h3>
        <p>Subjects</p>
      </div>
<div class="col-lg-4 col-md-12 col-sm-12">
        <h1>10</h1>
        <p>Homeworks</p>
      </div>

<div class="col-lg-4 col-md-12 col-sm-12">
        <h1>12</h1>
        <p>Exercises</p>
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