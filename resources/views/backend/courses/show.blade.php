@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="row">
				<div class="col-md-12">
					Name : {{$course->name}}
					<br>
					Outlines : {{$course->outline}}
					<br>
					Logo : {{$course->logo}}
				</div>
			</div>
		</div>
	</div>
@endsection