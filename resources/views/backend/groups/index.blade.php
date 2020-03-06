@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<a href="{{route('groups.create')}}" class="btn btn-info float-right">Add New</a>
<div  class="row table-responsive" >
		<div class="col-md-12">
			<table class="table table-bordered my-3">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th> 
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($groups as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$row->name}}</td>
						<td>
							<a href="{{route('groups.edit',$row->id)}}" class="btn btn-warning float-left mx-3"><i class="fas fa-edit"></i></a>
							<form method="post" action="{{route('groups.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure to Delete?')">
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
</div>
@endsection