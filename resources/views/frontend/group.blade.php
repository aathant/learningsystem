<!DOCTYPE html>
<html>
<head>
	<title>Group_Communication</title>

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/style3.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

  <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">

 <!--  <script type="text/javascript" src="{{asset('frontend/custom.js')}}"></script> -->
</head>
<body>
	<!-- <div class="bg" style="background-color: #FAFAFA">
     -->
     <div class="all">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white font border rounded-pill border-warning p-2" href="#" style="font-size: x-large;">Khaing Myint San Oo</a>
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
<<<<<<< HEAD


=======
<!-- <div class="container-fluid my-5">
<div class="row">
<div class=" offset-2 col-lg-8 offset-2 card">
  <div class="card-body">
    <h5 class="card-title">Name</h5>
    <hr>
    <p class="card-text">
    	<textarea class="btn-block" placeholder="What is on your mind" style="border: none"></textarea><hr><br><a href="#" class="btn btn-info btn-block">Post</a></p>
  </div>
</div>
</div>
</div> -->
>>>>>>> 273b8c944d2e8322fb2ad775eaa4baba5d8c21cd
<div class="container-fluid my-5">
	<div class="row">
		<div class="offset-9 col-lg-3">
			 <a href="#" class="btn btn-success rounded font btn-lg" data-toggle="modal" data-target="#post_modal"><i class="fas fa-plus"></i>Add Post</a>
		</div>
	</div>
</div>
<<<<<<< HEAD

=======
>>>>>>> 273b8c944d2e8322fb2ad775eaa4baba5d8c21cd
  <div class="container-fluid">
    @foreach($homework as $row)
    <div class="row">
      <div class=" offset-2 col-lg-8 offset-2 card">
        <div class="card-body">
          <h5 class="card-title"><img src="{{asset('frontend/image/photo.png')}}" style="border-radius: 50%; width: 50px; height: 50px;">{{$row->user->name}}</h5>
          <hr>
          <p class="card-text">
           {{$row->post}}
<<<<<<< HEAD
         </p>
           <hr><br>
           <p class="card-text">
             This is testing comment
             <hr></p>
             <a href="#" class="btn btn-success font"  data-toggle="modal" data-target="#comment_modal">
        <i class="far fa-comment"></i> Comment</a>
            <button  class="btn btn-success comment" data-cmt="{{$row->id}}" data-toggle="modal" data-target="#comment_modal"><i class="far fa-comment"></i> Comment</button>
          </p>
=======
            <button  class="btn btn-success comment" data-cmt="{{$row->id}}" data-toggle="modal" data-target="#comment_modal"><i class="far fa-comment"></i> Comment</button>
         </p>
>>>>>>> 273b8c944d2e8322fb2ad775eaa4baba5d8c21cd
           </div>
         </div>
       </div>
       @endforeach
     </div>

   <div id="counter1">
    <div class="container p-5">
      <div class="row text-white text-center">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <h3>3</h3>
          <p>{{$user->name}}</p>
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



      <div class="modal" tabindex="-1" role="dialog" id="post_modal">
        <div class="modal-dialog" role="document" >
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h5 class="modal-title"><img src="{{asset('frontend/image/photo.png')}}" style="border-radius: 50%; width: 50px; height: 50px;">
                {{$user->name}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{ route('homeworks.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group row">
                  <p><textarea name="post" class="col-md-12 btn-block form-control" placeholder="What is on your mind......" style="border: none; width:400px; height: 100px; margin-left: 100px;"></textarea></p>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Post</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="comment_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('assignments.store')}}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
            <input type="hidden" name="post" value="" id="cmtpost">
        <p><textarea class="btn-block" name="comment" placeholder="Add Comment" style="border: none"></textarea></p>
         <button type="submit" class="btn btn-success"><i class="far fa-comment"></i>&nbsp;add</button>
      </div>
    </form>
      <div class="container-fluid" id="comment">

      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

  $(document).ready(function() {
   
    $(".comment").click(function() {
      
     
        var id=$(this).data('cmt');
        // alert(id);
        $.get('/show_comment',{id:id},function(res){
          // console.log(res);
          var html='';
          $.each(res,function(i,v)
          {
             console.log(v);
             var post=v.homework_id;
             var routeURL="{{route('marks.store',':id')}}";
             routeURL=routeURL.replace(':id',post);
            html+=`<div class="row">
          <div class="col-lg-12 card">
            <div class="card-text"><i class="fas fa-image"></i>${v.user_id}</div>
            <div class="card-text">
              ${v.comment}</div>`;            

              html+='<form action="'+routeURL+'" method="post"> @csrf';

              html+=`<input type="hidden" value="${v.homework_id}" name="post_id">
              <input type="hidden" value="${v.id}" name="assignment_id">
            <div class="card-footer">
              <input type="text" name="mark">&nbsp;<button type="submit" id="mark"><i class="fas fa-check"></i></button>
            </div>
            </form>
          </div>
        </div>`;
          })

        $('#comment').html(html);

        })
        $('#cmtpost').val(id);

    })
  })

</script>
    </body>
    </html>