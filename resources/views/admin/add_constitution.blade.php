@extends('admin.dashboard.alumni.add_slider')
@section('adminContent')

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
		</div>
		<div class="box-content">
			<form class="form-horizontal col-md-6" action="{{url('/add_constitution')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
			  <fieldset>
				
				<div class="form-group">
					<label>Upload your Constitution file</label>
					<input type="file" class="form-control" name="constitution" required="">
				</div>
				
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Constitution</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>

			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection

