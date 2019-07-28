@extends('admin.dashboard.alumni.add_slider')
@section('adminContent')

<div class="container">
<div class="class="card col-md-4">
	<form method="post" action="{{url('/add_batch')}}">
			@csrf
			<div class="form-group">
				<label>Add Batch</label>
					<input type="text" name="batch_name" placeholder="Type the batch" class="form-control" required="">
					<small>Batch Name</small>
			</div>
			<div class="form-group">
				<input type="submit" name="" class="form-control" value="Save" class="btn btn-success">
			</div>

		</form>
	
</div>

</div>

@endsection