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
<nav class="navbar navbar-expand-lg navbar-light bg-info">
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
    <div class="col-lg-12">
      <h2 class="text-center">Welcome Bootcamper!</h2>
      <h5 class="text-center"> We Are Trainer Of PHP Web Developer Bootcamp!!!</h5>
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
          <a href="{{route('detail_subject',$trainer->id)}}" class="btn btn-outline-info btn-block">Show Subjects</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 bg-info mt-5">
      <p class="text-white text-center my-2">Myanmar IT Consulting||
      Web Developer Bootcamp</p>
    </div>
  </div>
</div>
</body>
</html>