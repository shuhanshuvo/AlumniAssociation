
@extends('admin.dashboard.alumni.add_slider')
@section('adminContent')

<div class="card container">
	<form method="post" action="{{url('add_designation')}}">
			@csrf
			<div class="form-group">
				<label>Add Designation</label>
					<input type="text" name="designation" placeholder="Type the designation" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Responsibility</label>
				<input type="text" name="responsibility" placeholder="Type the Responsibility of the Designation" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label>Status</label>
				<input type="text" class="form-control" name="status" >
			</div>
			<div class="form-group">
				<input type="submit" name="" class="form-control" value="Save" class="btn btn-success">
			</div>

		</form>
	
</div>

@endsection