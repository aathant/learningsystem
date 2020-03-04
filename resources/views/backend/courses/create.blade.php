@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Course Create Form</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="name" class="col-sm-2 col-form-label">Name : </label>
					<div class="col-sm-10">
						<input type="text" name="name" placeholder="Enter Name" id="name" class="form-control">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('logo') ? 'has-error' : '' }}">
					<label for="logo" class="col-sm-2 col-form-label">Logo : </label>
					<div class="col-sm-10">
						<input type="file" name="logo" id="logo">
						<span class="text-danger">{{ $errors->first('logo') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('outlines') ? 'has-error' : '' }}">
					<label for="outline" class="col-sm-2 col-form-label">Outlines : </label>
					<div class="col-sm-10">
						<textarea id="outline" name="outlines" class="form-control"></textarea>
						<span class="text-danger">{{ $errors->first('outlines') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('fees') ? 'has-error' : '' }}">
					<label for="fee" class="col-sm-2 col-form-label">Fees : </label>
					<div class="col-sm-10">
						<input type="number" name="fees" id="fee" class="form-control">
						<span class="text-danger">{{ $errors->first('fees') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('during') ? 'has-error' : '' }}">
					<label for="during" class="col-sm-2 col-form-label">During : </label>
					<div class="col-sm-10">
						<input type="text" name="during" id="during" class="form-control">
						<span class="text-danger">{{ $errors->first('during') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('duration') ? 'has-error' : '' }}">
					<label for="duration" class="col-sm-2 col-form-label">Duration : </label>
					<div class="col-sm-10">
						<input type="text" name="duration" id="duration" class="form-control">
						<span class="text-danger">{{ $errors->first('duration') }}</span>
					</div>
				</div>
				<div class="form-group row">
					<button type="submit" class="btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection