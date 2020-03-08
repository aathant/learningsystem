@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Create Groups</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('groups.store')}}" method="POST">
		@csrf
 
		<div class="form-group row">
			<div class="col-6">
				<label class="col-sm-12 col-form-label">Student Course</label>
				
				<select name="course" class="form-control dynamic" id="course" data-dependent="batch">
				@foreach($courses as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
				@endforeach
				</select>
			</div>

			<div class="col-6" id="batchold">
				<label class="col-sm-12 col-form-label">Student Batch</label>
				
				<select class="form-control dynamic " id="batch"data-dependent="student" disabled="disabled">
					<option value=""></option>
				</select>

			</div>
			<div class="col-6" id="new">
				<label class="col-sm-12 col-form-label">Student Batch</label>			
				<select name="batch" class="form-control student" data-dependent="student" id="batchnew">

				</select>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-6">
				<label class="col-sm-12 col-form-label">Choose Mentor</label>
				<select name="mentor" class="form-control" id="mentor" >
				@foreach($mentor as $row)
					<option value="{{$row->id}}">{{$row->user->name}}</option>
				@endforeach
				</select>
			</div>

			<div class="col-6" id="oldstudent">
				<label class="col-sm-12 col-form-label">Choose Students</label>
				<select class="js-example-basic-multiple form-control" name="states[]" id="student" multiple="multiple" disabled="disabled">
					<option value=""></option>
				</select>		
			</div>
			<div class="col-6" id="newstu">
				<label class="col-sm-12 col-form-label">Choose Students</label>
				<select class="js-example-basic-multiple form-control" name="states[]" id="newstudent" multiple="multiple">
				 
				</select>		
			</div>
		</div>
		<div class="form-group row">
			<div class="col-6">
				<label class="col-sm-12 col-form-label" for="inputName">Group Name
				</label>
				<input type="text" class="form-control" id="inputName" name="groupname">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-12">
				<button type="submit" class="btn btn-primary btn-block">Save register</button>
			</div>
		</div>
	</form>
	</div>
</div>


@endsection

@section('script')


<script type="text/javascript">

$(document).ready(function() {
	$('#batchnew').hide();
	$('#new').hide();
	$('#newstudent').hide();
	$('#newstu').hide();
	
    $('.js-example-basic-multiple').select2();

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $('.dynamic').change(function()
    {
    	var id=$(this).val();
    	$.post("/show_batch",{id:id},function(res)
    	{
    		$('#batch').prop('disabled',false);
    		var html='';
    		$.each(res,function(i,v)
    		{
    			// console.log(v.title);
    			var id=v.id;
    			var title=v.title;
    			//console.log(title);
    			
    			html+=`<option value="${id}">${title}</option>`;
				
    		})
    		$('#batchold').hide();
    		$('#batchnew').html(html);
    		$('#batchnew').show();
    		$('#new').show();

    	})
    });

    $('.student').change(function()
    {
    	var id=$(this).val();
    	 console.log(id);
    	$.post("/show_student",{id:id},function(res)
    	{

    		console.log(res);
    		$('#student').prop('disabled',false);
    		var html=``;
    		$.each(res,function(i,v)
    		{
    			 console.log(v);
    			var id=v.id;
    			var user=v.namem;

    			html+=`<option value="${id}">${user}</option>`;
    		})
    		$('#oldstudent').hide();
    		$('#newstudent').html(html);
    		$('#newstu').show();
    		
    		$('#newstudent').show();
    	})


    })
});

</script>
@endsection
