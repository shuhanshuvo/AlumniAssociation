@extends('admin.dashboard.alumni.add_slider')
@section('adminContent')

<div class="container">
<div class="class="card col-md-4">
	
	<form method="post" action="{{url('/add_session')}}">
			@csrf
			<div class="form-group">
				<label>Add Session</label>
					<input type="text" name="session_name" placeholder="Type the session" class="form-control" required="">
					<small>Session Name</small>
			</div>
			<div class="form-group">
				<input type="submit" name="" class="form-control" value="Save" class="btn btn-success">
			</div>

		</form>
	
</div>

</div>

@endsection