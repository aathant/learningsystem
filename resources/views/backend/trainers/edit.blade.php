@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('trainers.update',$trainer->id)}}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name : </label>
					<div class="col-sm-10">
						<input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email : </label>
					<div class="col-sm-10">
						<input type="email" name="email" id="email" value="{{$user->email}}" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="phone" class="col-sm-2 col-form-label">Phone : </label>
					<div class="col-sm-10">
						<input type="text" name="phone" id="phone" value="{{$trainer->phone}}" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Avatar : </label>
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
								<img src="{{asset($trainer->avatar)}}" class="img-fluid w-25">
								<input type="hidden" name="oldavatar" value="{{$trainer->avatar}}">
							</div>
							<div class="tab-pane fade" id="new">
								<input type="file" name="avatar">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Choose Degree : </label>
						<select name="degree" class="form-control col-sm-10">
							@foreach($degree as $ro)
								<option value="{{$ro->id}}"
									@if($trainer->degree_id == $ro->id)
										{{'selected'}} 
									@endif>{{$ro->name}}
								</option>
							@endforeach
						</select>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Choose Course : </label>
						<select name="course" class="form-control col-sm-10">
							@foreach($course as $row)
								<option value="{{$row->id}}"
									@if($trainer->course_id == $row->id)
										{{'selected'}} 
									@endif>{{$row->name}}
								</option>
							@endforeach
						</select>
				</div>
				<div class="form-group row">
					<label for="degree" class="col-sm-2 col-form-label">Address : </label>
						<textarea id="address" name="address" class="form-control col-sm-10">
							{{$trainer->address}}
						</textarea>
				</div>
				<div class="form-group row">
					<label for="portfolio" class="col-sm-2 col-form-label">Portfolio : </label>
					<div class="col-sm-10">
						<input type="text" name="portfolio" id="portfolio" value="{{$trainer->portfolio}}" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<input type="submit" name="submit" value="Update" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
