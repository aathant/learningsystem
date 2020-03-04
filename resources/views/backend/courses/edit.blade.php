@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<h2>Show with form/old value</h2>
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('courses.update',$course->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="name" class="col-sm-2 col-form-label">Name : </label>
					<div class="col-sm-10">
						<input type="text" name="name" placeholder="Enter Name" id="name" value="{{$course->name}}" class="form-control">
						<span class="text-danger">{{ $errors->first('name') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('logo') ? 'has-error' : '' }}">
					<label class="col-sm-2 col-form-label">Photo : </label>
					<div class="col-sm-10">

						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#old">Old Photo</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#new">New Photo</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="old">
								<img src="{{asset($course->logo)}}" class="img-fluid w-25">
								<input type="hidden" name="oldlogo" value="{{$course->logo}}">
							</div>
							<div class="tab-pane fade" id="new">
								<input type="file" name="logo">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('outlines') ? 'has-error' : '' }}">
					<label for="outline" class="col-sm-2 col-form-label">Outlines : </label>
					<div class="col-sm-10">
						<textarea id="outline" name="outlines" class="form-control">
							{{$course->outline}}
						</textarea>
						<span class="text-danger">{{ $errors->first('outlines') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('fees') ? 'has-error' : '' }}">
					<label for="fee" class="col-sm-2 col-form-label">Fees : </label>
					<div class="col-sm-10">
						<input type="number" name="fees" id="fee" class="form-control" value="{{$course->fees}}">
						<span class="text-danger">{{ $errors->first('fees') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('duration') ? 'has-error' : '' }}">
					<label for="during" class="col-sm-2 col-form-label">During : </label>
					<div class="col-sm-10">
						<input type="text" name="during" id="during" class="form-control" value="{{$course->during}}">
						<span class="text-danger">{{ $errors->first('during') }}</span>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('duration') ? 'has-error' : '' }}">
					<label for="duration" class="col-sm-2 col-form-label">Duration : </label>
					<div class="col-sm-10">
						<input type="text" name="duration" id="duration" class="form-control" value="{{$course->duration}}">
						<span class="text-danger">{{ $errors->first('duration') }}</span>
					</div>
				</div>
				<div class="form-group row">
					<button type="submit" class="btn-primary">Update</button>
				</div>
			</form>
		</div>
	</div>

</div>
@endsection