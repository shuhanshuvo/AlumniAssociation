@extends('layouts.master')

@section('content')
@include('includes.top-bar')
<div class="photo_show">
    <div class="container">
        @if(count($album->photos) > 0)
		<?php
		    $colcount = count($album->photos);
		    $i = 1;
		?>
		<div id="photos" class="text-center">
		    <div class="container">
	            <div class="row">
	                @foreach($album->photos as $photo)
		            @if($i == $colcount)
		                <div class="col-md-3">
		                  {{--   <a href="/albums/{{$album->id}}">  --}}
		                        <img src="{{asset('storage/photos/'.$photo->photo)}}" class="rounded">
		                    </a>
		                    <br>
		                    <h3>{{$photo->title}}</h3>
		                    @else
		                    <div class="col-md-3">
		                      {{--   <a href="/albums/{{$album->id}}"> --}}
		                        <img src="{{asset('storage/photos/'.$photo->photo)}}" class="rounded">
		                        <br>
		                        <h3>{{$photo->title}}</h3>
		                        @endif
		                        @if($i % 4 == 0)
		                    </div>
		                </div>
		              </div>
		            </div>
		            <div class="row text-center">
		            @else
	            </div>
		            @endif
		             <?php $i++; ?>
		          @endforeach
		        </div>
		    </div>
		    @else 
		        <p>No Albums To Display</p>
		    @endif
		        
		    </div>
		</div>



@endsection