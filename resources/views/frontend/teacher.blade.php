<!DOCTYPE html>
<html>
<head>
	<title>This is teacher page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/style2.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

	<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">

	<script type="text/javascript" src="{{asset('frontend/custom.js')}}"></script>
</head>
<body>
<div class="all">
	 <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white font " style="margin-right: 850px; font-size: x-large;">Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active px-4 text-white" href="{{route('subject')}}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link px-4 text-white" href="{{route('teacher')}}">Teachers/Mentors</a>
            <a class="nav-item nav-link px-4 text-white" href="{{route('group_communication')}}">Events</a>
          </div>
        </div>
      </nav>

	<!-- copy -->
	<div class="container">
		<div class="row">
			@foreach($trainers as $trainer)
			<div class=" offset-1 col-md-3">
				<article class="team blue">
					<div class="photo">
						<img class="pic" src="{{asset($trainer->avatar)}}" alt="libby">
					</div>
					<div class="profile-text">
						<p class="title font">{{$trainer->user->name}}</p>
						<span class="position"><a href="{{$trainer->portfoilo}}" class="list-unstyled">
						Trainer</span>
					</div>
					<ul class="social-icons">
						<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						<li><a href=""><i  class="fab fa-dribbble"></i></a></li>
					</ul>
				</article>
			</div>
			@endforeach
		</div>

		<div class="row">
			@foreach($mentors as $mentor)
			<div class="offset-1 col-md-3">
				<article class="team green">
					<div class="photo">
						<img src="{{asset($mentor->avatar)}}" alt="Mick">
					</div>
					<div class="profile-text">
						<p class="title">{{$mentor->user->name}}</p>
						<span class="position"><a href="{{$mentor->portfoilo}}" class="list-unstyled"></span>
					</div>
					<ul class="social-icons">
						<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						<li><a href=""><i  class="fab fa-dribbble"></i></a></li>
					</ul>
				</article>
			</div>
			@endforeach
			</div>
		</div>
		</div>

			<!-- copy -->
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