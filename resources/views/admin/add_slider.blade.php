@extends('admin.dashboard.alumni.add_slider')
@section('adminContent')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
		</div>
		<div class="box-content">
			<p class="alert-danger" style="text-align: center;">
			<?php
				$msg = Session::get('message');
				if($msg) {
					echo $msg;
					Session::put('message',NULL);
				}
			?>
			</p>

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			@if($msg)
			<div class="well">
				{{$msg}}
			</div>
			@endif
			<form class="form-horizontal col-md-6" action="{{url('/add_slider')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
			  <fieldset>
				
				<div class="form-group">
					<label>Title</label>
					<input type="text" class="form-control" name="title" required="">
				</div>
				<div class="form-group">
					<label>Sub-Title</label>
					<input type="text" class="form-control" name="sub_title" required="">
				</div>
				<div class="control-group">
					<label>Slider Image</label>
					<input type="file" class="form-control" name="image" style="background: none;border: none;">
				</div>

			    {{-- <div class="control-group hidden-phone">
				    <label class="control-label" for="date02">Publication Status</label>
				<div class="controls">
					<input type="checkbox" id="date02" name="publication_status" value="1" required="">
				  </div>
				</div> --}}
				
				
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Slider</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>

			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection

