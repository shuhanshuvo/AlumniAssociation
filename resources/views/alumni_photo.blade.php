@extends('layouts.master')

@section('content')

@include('includes.header')

@if(count($album->photos) > 0)
<?php
    $colcount = count($album->photos);
    $i = 1;
?>
<div class="gallery">
    <div class="container">
        <h3>Photo Gallery</h3> 
        <div class="line"></div>
        <div class="row">
            @foreach($album->photos as $photo)
            @if($i == $colcount)
            <div class="col-md-3">
                <div class="photo_area">
                    <img src="{{asset('storage/photos/'.$album->photos->photo)}}" class="rounded">
                     <br>
                    <h4>{{$photo->title}}</h4>
                    @else
                    <div class="col-md-3">
                        <div class="photo_area">
                            <img src="{{asset('storage/photos/'.$album->photos->photo)}}" class="rounded">
                             <br>
                            <h4>{{$photo->title}}</h4>
                            @endif
                            @if($i % 4 == 0)
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @else
        </div>
        @endif
             <?php $i++; ?>
          @endforeach 
    </div>
</div>
@else
    <div class="container">
        <p>No Photos To Display</p>
    </div>  
@endif

@endsection