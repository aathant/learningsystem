@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<a href="{{route('courses.create')}}" class="btn btn-info float-right">Add New</a>
<div  class="row table-responsive" >
	<table class="table table-bordered my-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Fees</th>
				<th>During</th>
				<th>Duration</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1;@endphp
			@foreach($courses as $row)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$row->name}}</td>
				<td>{{$row->fees}}</td>
				<td>{{$row->during}}</td>
				<td>{{$row->duration}}</td>
				<td>
					<a href="{{route('courses.show',$row->id)}}" class="btn btn-info mx-1 float-left"><i class="fas fa-eye"></i></a>
					<a href="{{route('courses.edit',$row->id)}}" class="btn btn-warning float-left mx-2"><i class="fas fa-edit"></i></a>
					<form method="post" action="{{route('courses.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure to Delete?')">
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