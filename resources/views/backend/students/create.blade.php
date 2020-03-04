@extends('backendtemplate')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-fluid">
	<div class="row">
		<div class="col-12 card">
			<h2>New Student Registeration Form</h2>
			<form action="{{route('students.store')}}" method="post" >
				@csrf
				<div class="form-group row">
					<div class="col-sm-6 ">
						<label for="ename" class="col-form-label">Student's Name : (English)
						</label>
						<input type="text" name="ename" id="ename" placeholder="Mg Mg" class="form-control">
					</div>
					<div class="col-sm-6 ">
						<label for="mname" class="col-form-label">Student's Name : (Myanmar)
						</label>
						<input type="text" name="mname" placeholder="မောင်မောင်" id="mname" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label for="education" class="col-form-label">Education : 
						</label>
						<input type="text" name="education" id="education" class="form-control">
					</div>
					<div class="col-sm-4">
						<label for="city" class="col-form-label">City :
						</label>
						<input type="text" name="city" id="city" class="form-control" placeholder="Yangon">
					</div>
					<div class="col-sm-2">
						<label for="year" class=" col-form-label">Accepted Year :
						</label>
						<input type="text" name="year" id="year" placeholder="2018" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-12">
						<label for="education" class=" col-form-label">Address : 
						</label>
						<textarea class=" form-control" name="address">
						</textarea>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label for="email" class="col-form-label">Email : 
						</label>
						<input type="email" name="email" id="email" placeholder="Email" class="form-control">
					</div>
					<div class="col-sm-6">
						<label for="phone" class="col-form-label">Phone : 
						</label>
						<input type="text" name="phone" placeholder="Phone" id="phone" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label for="date" class=" col-form-label">Date Of Birth : 
						</label>
						<input type="date" name="date" id="date" class="form-control">
					</div>

					<div class="col-sm-6">
						<label for="gender" class=" col-form-label">Gender : 
						</label>
						<div>
							<input type="radio" name="gender" value="Male" checked="checked" id="gender">Male
							<input type="radio" name="gender" value="Female" id="gender">Female
						</div>
					</div>
				</div>

			<div class="form-group row">
				<label class="col-sm-12 col-form-label">
					Which Programming Language did you know?(လက်ရှိကျွမ်းကျင်တဲ့ programming language) 
				</label>
			</div>
			<div class="form-group row">
				<div class="col-sm-6"> 
					@foreach($skill as $row)
					<input type="checkbox" name="subjects[]" value="{{$row->id}}">{{$row->name}}
					@endforeach
				</div>
			</div>
			<hr>
			<h3>Household Parent/Guardian Information</h3>

			<div class="form-group row">
				<div class="col-sm-4">
					<label for="parent" class="col-form-label">Parent/Guardian #1 : 
					</label>
					<input type="text" name="parent" id="parent" class="form-control">
				</div>
				<div class="col-sm-4">
					<label for="relation" class="col-form-label">Relationship of Student :
					</label>
					<input type="text" name="relation" id="relation" class="form-control" placeholder="Yangon">
				</div>
				<div class="col-sm-4">
					<label for="ph" class="col-form-label">Phone :
					</label>
					<input type="text" name="ph" id="ph" class="form-control">
				</div>
			</div>
			
			
			<div class="form-group row">
				<div class="col-sm-4">
					<label for="parent1" class="col-form-label">Parent/Guardian #2 : 
					</label>
					<input type="text" name="parent1" id="parent1" class="form-control">
				</div>
				<div class="col-sm-4">
					<label for="relation1" class=" col-form-label">Relationship of Student :
					</label>
					<input type="text" name="relation1" id="relation1" class="form-control" placeholder="Yangon">
				</div>
				<div class="col-sm-4">
					<label for="ph1" class=" col-form-label">Phone :
					</label>
					<input type="text" name="ph1" id="ph1" class="form-control">
				</div>
			</div>
			 
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Choose Batch : </label>
						<select name="bid" class="form-control col-sm-10">
							@foreach($batches as $row)
								<option value="{{$row->id}}">{{$row->title}}</option>
							@endforeach
						</select>
				</div>
			<hr>
			<h5>သင်တန်းတွေအများကြီးထဲက Myanmar IT Consulting သင်တန်းကို ရွေးချယ်ရတဲ့ အကြောင်းအရင်းကို သိပါရစေ။
			</h5>
			<div class="form-group row">
				<div class="col-sm-12">
					<label class="col-form-label">Because : </label>
					<textarea placeholder="Please....." class="form-control" name="because"></textarea>
				</div>
			</div>

			

			<button type="submit" name="submit" class="btn btn-primary col-sm-12 text-center">Save Register</button>
			
		</form>
	</div>
</div>
</div>
@endsection