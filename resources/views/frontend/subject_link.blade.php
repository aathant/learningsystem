<!DOCTYPE html>
<html>
<head>
	<title>Subject_Home</title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

	<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">

	<script type="text/javascript" src="{{asset('frontend/custom.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info" >
  <a class="navbar-brand text-white" href="#">Student's Name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active px-4 text-white" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link px-4 text-white" href="#">My Subjects</a>
      <a class="nav-item nav-link px-4 text-white" href="#">My Teachers/Mentors</a>
      <a class="nav-item nav-link px-4 text-white" href="#">Events</a>
    </div>
  </div>
</nav>
<div class="container-fluid my-5">
  <div class="row">
    <div class="col-lg-12 card text-center">
      <h2>Hello Bootcamper!</h2> 
        Here are PPT of Subjects! Let Download.....

    </div>
  </div>
</div>
<!-- <h2>Hello Students! I'am Hein Min Htet and I will teach you HTML, JavaScript and JQuery..
</h2>
<h3>Here are Power Point about Subject! Let Download.....</h3>
 -->
<div class="container-fluid my-5">
  <div class="row">
     @foreach($subjects as $subject)
    <div class="col-lg-4 card">
      <div class="card-body">
      <img src="{{asset($subject->logo)}}" style="width: 400px; height: 400px";>
      </div>
      <div class="card-footer">
        <a href="{{$subject->pdf_link}}" class="btn btn-outline-info btn-block">Download PPT</a>
      </div>
    </div>
    @endforeach
  </div>
  
</div>

<!-- @foreach($subjects as $subject)
<ul>
  <li>{{$subject->name}}</li>
  <li><a href="{{$subject->pdf_link}}">HTML</a></li>
</ul>
@endforeach -->

<!-- <div class="container-fluid">
  <div class="row">
    <div class="col-lg-3">
    </div>
  </div>
</div> -->

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 bg-info">
      <p class="text-white text-center my-2">Myanmar IT Consulting||
      Web Developer Bootcamp</p>
    </div>
  </div>
</div>

</body>
</html>