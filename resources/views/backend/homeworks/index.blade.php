@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<a href="{{route('homeworks.create')}}" class="btn btn-info float-right">Add New</a>
<div  class="row table-responsive" >
	<table class="table table-bordered my-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Question</th>
				<th>Mark</th>
				<th>Description</th>
				<th>Trainer</th>
				<th>Start_time</th>
				<th>End_time</th> 
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1;@endphp
			@foreach($homework as $row)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$row->question}}</td>
				<td>{{$row->marks}}</td>
				<td>{{$row->description}}</td>
				<td>{{$row->trainer->name}}</td>
				<td>{{$row->start_time}}</td>
				<td>{{$row->end_time}}</td>
				<td>
					<a href="{{route('homeworks.edit',$row->id)}}" class="btn btn-warning float-left"><i class="fas fa-edit"></i></a>
					<form method="post" class="float-right" action="{{route('homeworks.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure to Delete?')">
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