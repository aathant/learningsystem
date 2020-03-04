@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<form action="{{route('subjects.update',$subject->id)}}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label class="col-2 form-control-label">Name</label>
					<input type="text" name="name" id="name" value="{{$subject->name}}" placeholder="Enter Name" class="form-control col-10">
				</div>
				<div class="form-group row">
					<label for="pdf" class="col-2 col-form-label">PDF : </label>
					<input type="text" name="pdf" id="pdf" value="{{$subject->pdf_link}}" class="col-10 form-control">
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Choose Trainer : </label>
						<select name="trainer" class="form-control col-sm-10">
							@foreach($trainer as $row)
								<option value="{{$row->id}}"
									@if($subject->trainer_id == $row->id){{'selected'}} @endif>{{$row->user->name}}
								</option>
							@endforeach
						</select>
				</div>
				<div class="form-group row">
					<button type="submit" class="btn-primary">Update</button>
				</div>
			</form>
			
		</div>
	</div>	
</div>

@endsection