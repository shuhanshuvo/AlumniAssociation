@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<div class="back-image">
    <div class="img_overlay">
        <div class="container text-center">
            <h2 class="mb-0">Post a Job</h2>
        </div>
    </div>
</div>
<div class="job_post">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">

                <p class="text-center" style="color: green;font-size: 18px;">
              <?php
                  $message = Session::get('message');
                  if($message){
                      echo $message;
                      Session::put('message', null);
                  }
              ?>
          </p>
            <form action="{{ url('/user_job_post') }}" method="POST">

                {{csrf_field()}}
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" class="form-control" name="job_title" placeholder="eg. Full Stack Frontend">
                    </div>
                    <br>
                    <div class="form-group">
                        <label >Compnay</label>
                        <input type="text" class="form-control" name="company" placeholder="eg. Facebook, Inc">
                    </div>
                   
                        <div class="form-group">
                            <h3>Job Description</h3>
                            <textarea name="job_description" type="text" class="form-control" rows="6" cols="6"
                            placeholder="Write something about your job.. " style="resize:none"></textarea>
                        </div>
                    <input type="submit" class="btn btn-success" value="Post a Job">
                    </div>
                    <div class="col-lg-2"></div>
                </form>
            </div>
            
        </div>
    </div>
    
    
</div>
@include('includes.footer')

@endsection