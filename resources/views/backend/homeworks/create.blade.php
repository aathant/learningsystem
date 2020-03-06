@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('homeworks.store')}}" method="post">
				@csrf
				<div class="form-group row">
					<label for="question" class="col-sm-2 col-form-label">Question : </label>
					<div class="col-sm-10">
						<textarea ></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label for="mark" class="col-sm-2 col-form-label">Marks : </label>
					<div class="col-sm-10">
						<input type="text" name="mark" id="mark" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="enddate" class="col-sm-2 col-form-label">Description : </label>
					<div class="col-sm-10">
						<input type="text" name="enddate" id="enddate" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="time" class="col-sm-2 col-form-label">Time : </label>
					<div class="col-sm-10">
						<input type="text"  name="time" id="time" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Choose Course</label>
					<select name="course" class="form-control col-sm-10">
						@foreach($course as $row)
						<option value="{{$row->id}}">{{$row->name}}</option>
						@endforeach 
					</select>
				</div>
				<div class="form-group row">
					<button type="submit" class="btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection