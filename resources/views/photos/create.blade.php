@extends('layouts.master')

@section('content')

@include('includes.top-bar')
    <div class="photo_create">
        <div class="container">
            <h3>Upload Photo</h3>
            <div class="line"></div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ url('/photos/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Photo Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Photo Title">
                        </div>
                        <div class="form-group">
                            <label for="name">Photo Description</label>
                            <textarea name="description" rows="6" class="form-control" placeholder="Photo Description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="{{$album_id}}"name="album_id" class="form-control">
                            </div>
                        <div class="form-group">
                            <input type="file" name="photo">
                        </div>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection