@extends('admin.dashboard.index')
@section('adminContent')
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Slider ID</th>
					  <th>Slider Image</th>
					  <th>Action<th>
					
				  </tr>
			  </thead>  
			  @foreach($sliders as $item) 
			  <tbody>
				<tr>
					<td>{{$item->id}}</td>
					<td class="center">
						<img src="{{URL::to('uploads/images/'.$item->image)}}" style="height: 80px;width: 200px;">
					</td>
					<td class="center">
						@if($item->publication_status == 1)
							<span class="label label-success">Published</span>
						@else
							<span class="label label-danger">Unpublished</span>
						@endif
					</td> 
					 <td class="center">
						{{-- @if($item->publication_status == 1)
							<a class="btn btn-danger" href="{{URL::to('/unactive-slider/'.$item->slider_id)}}">
								<i class="halflings-icon white thumbs-down"></i>  
							</a>
						@else
							<a class="btn btn-success" href="{{URL::to('/active-slider/'.$item->slider_id)}}">
								<i class="halflings-icon white thumbs-up"></i>  
							</a>
						@endif  --}}
						<a class="btn btn-danger" href="{{url('/delete-slider/'.$item->id)}}" id="delete">Delete
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
			  </tbody>
			  @endforeach
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection