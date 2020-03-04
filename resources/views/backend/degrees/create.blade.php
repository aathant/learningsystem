@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('degrees.store')}}" method="post">
				@csrf
				<div class="form-group row">
					<label class="col-2 col-form-label">Name : </label>
					<input type="text" name="name" id="name" placeholder="Enter Name" class="@error('name') is-invalid @enderror col-10 form-control">
					@error('name')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group row">
					<button type="submit" class="btn-primary">Save</button>
				</div>
			</form>

		</div>
	</div>	
</div>

@endsection