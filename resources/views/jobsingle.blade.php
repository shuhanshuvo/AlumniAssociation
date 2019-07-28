@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<div class="container">
   
    <div class="row">
   
      <div class="col-lg-8">
         <div class="mt-4" style="margin-bottom:4px;"> 
            <h2>{{$job->job_title}}</h2>
            <p class="lead">
              by
              <a href="">{{$job->user->full_name}}</a>
              <br>
              <h5>Company: {{$job->company}}</h5>
            </p>
            

            <p>Posted on {{date('M j,Y',strtotime($job->created_at))}}</p>
          
            <!-- Post Content -->
            <p>{!!html_entity_decode($job->job_description)!!}</p>
        
         </div>
     
      
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">

            <form method="POST" action="{{route('create.comment',$job->id)}}">
              {{csrf_field()}}
                <div class="form-group">
                 
                  <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="form-group mb-0">
                <textarea class="form-control" rows="4" name="commentbody" placeholder="Message"></textarea>
              </div>
              <input type="submit" class="btn btn-success" value="Submit">
            </form>

          </div>
        </div>
       

        <!-- Single Comment -->
      @foreach($comments as $comment)
        <div class="media mb-3 mt-3">
        <img class="d-flex mr-3 rounded-circle" src="{{asset('style/img/download.jpg')}}" alt="">
          <div class="media-body">
            <h5 class="mt-1">{{$comment->name}}</h5>
            {{$comment->commentbody}}
          </div>
        </div>

      @endforeach

      

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-danger" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Recent Post -->
        <div class="card my-3">
          <h5 class="card-header">Recent Posts</h5>
          <div class="card-body">
            <ul>
              @foreach($rjobs as $job)
                <li>
                    <h5><a href="{{ url('/post/'.$job->id.'') }}">{{$job->job_title}}</a></h5>
                    <p class="lead">
                        by
                        <a href="#">{{$job->user->full_name}}</a>
                    </p>
                </li>
              @endforeach  
            </ul>
          </div>
          
        </div>

      </div>

    </div> <br><br>
    
    <!-- /.row -->

  </div>

@include('includes.footer') 

@endsection