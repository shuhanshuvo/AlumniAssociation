@extends('layouts.master')

@section('content')

@include('includes.header')

@if(count($albums) > 0)
<?php
    $colcount = count($albums);
    $i = 1;
?>

<div class="gallery">
    <div class="container">
        <h3>Photo Gallery</h3> 
        <div class="line"></div>
        <h4>Albums</h4>
        <hr> 
        <div class="row">
             @foreach($albums as $album)
          @if($i == $colcount)
            <div class="col-md-3">
                <div class="photo_area">
                    <a href="/albums/{{$album->id}}">
                        <img class="rounded" src="storage/album_covers/<?php echo $album['cover_image']?>" alt="{{ $album->name }}">
                    </a>
                    <br>
                    <h4>{{$album->name}}</h4>
                    @else
                </div>

                <div class="col-md-3">
                    <div class="photo_area">
                        <a href="/albums/{{$album->id}}">
                            <img class="rounded" src="storage/album_covers/<?php echo $album['cover_image']?>" alt="{{ $album->name }}">
                        </a>
                        <br>
                        <h4>{{$album->name}}</h4>
                        @endif
                        @if($i % 4 == 0)
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
            @else
        </div>
        </div>
        @endif
             <?php $i++; ?>
          @endforeach 
    </div>
</div>
@else
    <div class="container">
        <p style="margin-top: 30px;">No Albums To Display</p>
    </div> 
@endif

@endsection