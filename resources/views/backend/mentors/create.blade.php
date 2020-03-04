@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('mentors.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name : </label>
					<div class="col-sm-10">
						<input type="text" name="name" id="name" placeholder="Enter name" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email : </label>
					<div class="col-sm-10">
						<input type="email" name="email" id="email" placeholder="Email" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="phone" class="col-sm-2 col-form-label">Phone : </label>
					<div class="col-sm-10">
						<input type="text" name="phone" id="phone" placeholder="Phone" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Avatar : </label>
					<div class="col-sm-10">
						<input type="file" name="avatar">
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Choose Degree : </label>
						<select name="degree" class="form-control col-sm-10">
							@foreach($degree as $ro)
								<option value="{{$ro->id}}">{{$ro->name}}</option>
							@endforeach
						</select>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Choose Course : </label>
						<select name="course" class="form-control col-sm-10">
							@foreach($course as $row)
								<option value="{{$row->id}}">{{$row->name}}</option>
							@endforeach
						</select>
				</div>
				<div class="form-group row">
					<label for="degree" class="col-sm-2 col-form-label">Address : </label>
						<textarea id="address" name="address" class="form-control col-sm-10"></textarea>
				</div>
				<div class="form-group row">
					<label for="portfolio" class="col-sm-2 col-form-label">Portfolio : </label>
					<div class="col-sm-10">
						<input type="text" name="portfolio" id="portfolio" placeholder="portfolio_link" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<input type="submit" name="submit" value="Save" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
