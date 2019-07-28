@extends('layouts.master')

@section('content')

@include('includes.top-bar')
    <div class="photo_create">
        <div class="container">
            <h3>Create Album</h3>
            <div class="line"></div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{ url('/albums/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Album Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Album Name">
                        </div>
                        <div class="form-group">
                            <label for="name">Album Description</label>
                            <textarea name="description" rows="6" class="form-control" placeholder="Album Description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="cover_image">
                        </div>
                        <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection