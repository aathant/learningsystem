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

			<form action="{{route('subjects.store')}}" method="post">
				@csrf
				<div class="form-group row">
					<label class="col-2 col-form-label">Name : </label>
					<input type="text" name="name" id="name" placeholder="Enter Name" class="col-10 form-control">
				</div>
				<div class="form-group row">
					<label for="pdf" class="col-2 col-form-label">PDF : </label>
					<input type="text" name="pdf" id="pdf" placeholder="pdf_link" class="col-10 form-control"> 
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Choose Trainer : </label>
						<select name="trainer" class="form-control col-sm-10">
							@foreach($trainer as $row)
								<option value="{{$row->id}}">{{$row->user->name}}</option>
							@endforeach
						</select>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Logo : </label>
					<input type="file" name="logo" id="pdf" class="col-10"> 
				</div>

				<div class="form-group row">
					<label class="col-2 col-form-label">Description</label>
					<textarea class="col-10 form-control" name="description"></textarea>
				</div>

				<div class="form-group row">
					<button type="submit" class="btn-primary">Save</button>
				</div>
			</form>

		</div>
	</div>	
</div>

@endsection