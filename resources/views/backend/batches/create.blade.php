@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form action="{{route('batches.store')}}" method="post">
				@csrf
				<div class="form-group row">
					<label for="title" class="col-sm-2 col-form-label">Title : </label>
					<div class="col-sm-10">
						<input type="text" name="title" id="title" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="startdate" class="col-sm-2 col-form-label">Start_Date : </label>
					<div class="col-sm-10">
						<input type="date" name="startdate" id="startdate" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<label for="enddate" class="col-sm-2 col-form-label">End_Date : </label>
					<div class="col-sm-10">
						<input type="date" name="enddate" id="enddate" class="form-control">
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