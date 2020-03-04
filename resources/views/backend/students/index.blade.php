@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<a href="{{route('students.create')}}" class="btn btn-info float-right">Add New</a>
<div  class="row table-responsive" >
	<table class="table table-bordered my-3">
		<thead>
			<tr>
				<th>No</th>
				<th>English_Name</th>
				<!-- <th>Myanmar_Name</th> -->
				<th>Email</th>
				<th>Phone</th>
				<!-- <th>Address</th> -->
				<th>Education</th>
				<!-- <th>City</th>
				<th>Accepted_Year</th>
				<th>Date Of Birth</th>
				<th>Gender</th>
				<th>P1</th>
				<th>P1_phone</th>
				<th>P1_relationship</th>
				<th>P2</th>
				<th>P2_phone</th>
				<th>P2_relationship</th>
				<th>Because</th>
				<th>Batch_id</th> -->
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1;@endphp
			@foreach($student as $row)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$row->user->name}}</td>
				<!-- <td>{{$row->namem}}</td> -->
				<td>{{$row->user->email}}</td>
				<td>{{$row->phone}}</td>
				<!-- <td>{{$row->address}}</td> -->
				<td>{{$row->education}}</td>
				<!-- <td>{{$row->city}}</td>
				<td>{{$row->accepted_year}}</td>
				<td>{{$row->dob}}</td>
				<td>{{$row->gender}}</td>
				<td>{{$row->p1}}</td>
				<td>{{$row->p1_phone}}</td>
				<td>{{$row->p1_relationship}}</td>
				<td>{{$row->p2}}</td>
				<td>{{$row->p2_phone}}</td>
				<td>{{$row->p2_relationship}}</td>
				<td>{{$row->because}}</td>
				<td>{{$row->batch_id}}</td> -->
				<td class="w-25">
					<a href="#" class="btn btn-info detail mx-1 float-left" data-id="{{$row->id}}"><i class="fas fa-eye"></i></a><!-- 
					<a href="{{route('students.edit',$row->id)}}" class="btn btn-warning float-left mx-2"><i class="fas fa-edit"></i></a> -->
					<form method="post" action="{{route('students.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure to Delete?')">
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

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 		
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('.detail').click(function()
			{
				var id=$(this).data('id');
				// alert(id);
				$.get("/backend/students/"+id,function(res)
				{
					// console.log(res);
					$('#detailModalLabel').text(res.namee);
					$('#detailModal').modal('show');
				})
			})
		})
	</script>
@endsection