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

			<form action="{{route('degrees.update',$degree->id)}}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label class="col-2 form-control-label">Name</label>
					<input type="text" name="name" id="name" value="{{$degree->name}}" placeholder="Enter Name" class="col-10 form-control">
				</div>
				<div class="form-group row">
					<button type="submit" class="btn-primary">Save</button>
				</div>
			</form>
			
		</div>
	</div>	
</div>

@endsection