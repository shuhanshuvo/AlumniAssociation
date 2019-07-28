@extends('layouts.master')

@section('content')

@include('includes.top-bar')
<br><br><br>
@if(count($albums) > 0)
<?php
    $colcount = count($albums);
    $i = 1;
?>
<div id="albums" class="text-center">
    <div class="container">
        @foreach($albums as $album)
            @if($i == $colcount)
            <div class="row">
                <div class="col-md-4">
                    <a href="/albums/{{$album->id}}">
                        <img class="rounded" src="storage/album_covers/<?php echo $album['cover_image']?>" alt="{{ $album->name }}">
                    </a>
                    <br>
                    <h3>{{$album->name}}</h3>
                    @else
                    <div class="col-md-4">
                        <a href="/albums/{{$album->id}}">
                        <img class="rounded" src="storage/album_covers/<?php echo $album['cover_image']?>" alt="{{ $album->name}}">
                        </a>
                        <br>
                        <h3>{{$album->name}}</h3>
                        @endif
                        @if($i % 3 == 0)
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

@endsection