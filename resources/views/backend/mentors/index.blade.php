@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<a href="{{route('mentors.create')}}" class="btn btn-info float-right">Add New</a>
<div  class="row table-responsive" >
	<table class="table table-bordered my-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Degree_id</th> 
				<th>Course_id</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1;@endphp
			@foreach($mentor as $row)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$row->user->name}}</td>
				<td>{{$row->user->email}}</td>
				<td>{{$row->phone}}</td>
				<td>{{$row->degree->name}}</td>
				<td>{{$row->course->name}}</td>
				<td>{{$row->address}}</td>
				<td>
					<a href="{{route('mentors.edit',$row->id)}}" class="btn btn-warning float-left"><i class="fas fa-edit"></i></a>
					<form method="post" action="{{route('mentors.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure to Delete?')">
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