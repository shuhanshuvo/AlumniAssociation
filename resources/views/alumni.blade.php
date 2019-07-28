@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<section class="alumni_list">
	<div class="container">
		<div class="table-responsive">
			<table class="table table-hover table-bordered nowrap" id="myTable" style="margin-top: 12px;">
				<thead>
					<tr>
						<th>Name</th>
						<th>Department</th>
						<th>Batch</th>
						<th>Email</th>
						<th>Job Title</th>
						<th>Company</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $users as $user)
					
						<tr data-href="{{'/alumni_profile/'.$user->id}}">
							<td>{{$user->full_name}}</td>
							<td>{{$user->department_name}}</td>
							<td>{{$user->batch->batch_name}}</td>
							<td>{{$user->email}}</td>
							<td>@if($user->present){{$user->present}}@else not updated @endif</td>
							<td>{{$user->company_name}}</td>
							<td><img src="uploads/images/@if($user->avatar){{$user->avatar}}@else{{("avatar.png")}} @endif"></td>
							</tr>

					@endforeach		
							
				</tbody>
			</table>
			{{ $users->links() }}
		</div>
	</div>
</section>

<script>

   document.addEventListener("DOMContentLoaded", () => {
     const rows = document.querySelectorAll("tr[data-href]");

	 rows.forEach(row => {
	
	 	row.addEventListener("click", () => {

	 		window.location.href = row.dataset.href;
	 	});

	 });

});

</script>

@endsection