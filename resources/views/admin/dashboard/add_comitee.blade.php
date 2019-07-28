
@extends('admin.dashboard.alumni.add_slider')
@section('adminContent')
@php
$designation=App\Comitee::all();
@endphp
<div class="container">
	<div class="card col-md-8"> 
		<form method="post" action="{{url('add_comitee')}}">
			@csrf
			<div class="form-group">
				<label>Add the user</label>
					<input type="text" name="email" placeholder="Type the email of the user" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Designation</label>
				<select class="form-control" name="designation">
					@if($designation)
						@foreach($designation as $designation)
							<option value="{{$designation->id}}">{{$designation->designation}}</option>
						@endforeach
					@endif
				</select>
			</div>
			<div class="form-group">
				<label>Start Date</label>
				<input type="date" name="start_date" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>End Date</label>
				<input type="date" name="end_date" class="form-control" >
			</div>
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control">
					<option>Active member</option>
					<option>Inactive </option>
					<option>Watching</option>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="" class="form-control" value="Save" class="btn btn-success">
			</div>

		</form>
	</div>
</div>

@endsection