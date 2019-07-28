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
					<div class="reset-section">
						<p>You can reset your password here.</p>
						<div class="section-header">
							<h2>FORGOT PASSWORD?</h2>
						</div>
						
						<form class="reset_form" method="post" action="{{ url('/reset_password') }}">
							{{ csrf_field() }}
							<label for="email">Email Address</label>
							<input type="email" name="email" class="form-control" placeholder="Email Address">
							<div class="row">
								<div class="col-lg-12 text-center">
									<input type="submit" value="Reset Password" class="btn">
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