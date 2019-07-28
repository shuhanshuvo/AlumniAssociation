@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<div class="container">
   
    <div class="row">
   
      <div class="col-lg-8">
       @foreach($jobs as $job)
         <div class="mt-4" style="margin-bottom:4px;"> 
            <h2><a href="{{ url('/post/'.$job->id.'') }}" >{{$job->job_title}}</a></h2>
            <p class="lead">
              by
              <a href="#">{{$job->user->full_name}}</a>
              <br>
              <h5>Company: {{$job->company}}</h5>
            </p>
            

            <p>Posted on {{date('M j,Y',strtotime($job->created_at))}}</p>
          
            <!-- Post Content -->
            <p>{{ substr(strip_tags($job->job_description),0,150) }}{{strlen(strip_tags($job->job_description))>150 ? " ......":""}}</p><a href="{{ url('/post/'.$job->id.'') }}" class="
            btn btn-success">Read More</a>
        
         </div>
      @endforeach
      <br>
         {{$jobs->links()}}

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