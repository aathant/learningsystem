@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Create Groups</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('groups.store')}}" method="POST" enctype="multipart/form-data">
		@csrf

		<div class="form-group row">
			<div class="col-6">
				<label class="col-sm-12 col-form-label">Student Course</label>
				
				<select name="course" class="form-control select1">
				@foreach($courses as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
				@endforeach
				</select>

			</div>

			<div class="col-6">
				<label class="col-sm-12 col-form-label">Student Batch</label>
				
				<select name="course" class="form-control select2">
					@foreach($batches as $row)
					<option value="{{$row->id}}" id="select2">{{$row->title}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-6">
				<label class="col-sm-12 col-form-label" for="inputName">Group Name</label>
			
				<input type="text" class="form-control" id="inputName" name="groupname">
			</div>

			<div class="col-6">
				<label class="col-sm-12 col-form-label">Choose Students</label>
				
				<select name="student" class="form-control select3">
				@foreach($students as $row)
					<option value="{{$row->id}}">{{$row->namee}}</option>
				@endforeach
				</select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-12">
				<button type="submit" class="btn btn-primary btn-block">Save register</button>
			</div>
		</div>

	</div>
</div>
@endsection

@section('script')

<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
    		headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

	});

		$('.select1').change(function(){
			var id=$(this).val();
			 //alert(id);
			$.post("{{route('course_batch')}}",{id:id},function(res){
			  //console.log(res);
			  $.each(res,function(i,v){

			  	$( ".select2 option:selected" ).text(v.title);
			  })
			
			
			 })
		});

		$('.select2').change(function(){
			var id=$(this).val();
			 // alert(id);
			$.post("{{route('batch_student')}}",{id:id},function(res){
			//console.log(res);
			 $.each(res,function(i,v){

			  	$( ".select3 option:selected" ).text(v.namee);
			 })
			
			
			})
		})
	})
</script>
@endsection