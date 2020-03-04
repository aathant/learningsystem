@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<a href="{{route('batches.create')}}" class="btn btn-info float-right">Add New</a>
<div  class="row table-responsive" >
	<table class="table table-bordered my-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Start_Date</th>
				<th>End_Date</th>
				<th>Time</th>
				<th>Course</th> 
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1;@endphp
			@foreach($batch as $row)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$row->title}}</td>
				<td>{{$row->startdate}}</td>
				<td>{{$row->enddate}}</td>
				<td>{{$row->time}}</td>
				<td>{{$row->course->name}}</td>
				<td>
					<a href="{{route('batches.edit',$row->id)}}" class="btn btn-warning float-left"><i class="fas fa-edit"></i></a>
					<form method="post" action="{{route('batches.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure to Delete?')">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">
							<i class="fas fa-trash-alt"></i>
						</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
@endsection