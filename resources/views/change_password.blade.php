@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<div class="home-section">
	<div class="dark-overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<div class="change_password">
						<p>You can change your password from here.</p>
						<div class="section-header">
							<h2>CHANGE PASSWORD?</h2>
						</div>
						
						<form class="reset_form" method="post" action="{{ url('/reset_password') }}">
							{{ csrf_field() }}
							<label for="email">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter your Password">

							<label for="email">Repeat your password</label>
							<input type="password" name="password" class="form-control" placeholder="Confirm Password">
							<div class="row">
								<div class="col-lg-12 text-center">
									<input type="submit" value="Change Password" class="btn">
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="col-md-4">
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection