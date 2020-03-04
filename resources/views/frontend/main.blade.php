@extends('frontend_template')
@section('content')
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
@endsection