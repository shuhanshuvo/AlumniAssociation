@extends('layouts.app')

@section('content')

<body class="sidebar-dark">
  <div class="container-scroller">
    @include('includes.menubar')

    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        </nav>

        <div class="content-wrapper">

          <p class="text-center" style="color: green;font-size: 18px;">
              <?php
                  $message = Session::get('message');
                  if($message){
                      echo $message;
                      Session::put('message', null);
                  }
              ?>
          </p>
          <h1 class="page-title">User Profile</h1>

          <div class="row user-profile">
            <div class="col-lg-5 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Alumni Info</h2>
                  <div class="profile-image">
                        <img src="{{ url('uploads/images/'.$user[0]->avatar) }}"
                        class="user-pict-img" alt="{{$user[0]->avatar}}"/>
                        <a href="#" data-toggle="modal" data-target="#image"></a>
                  </div>

                  <p class="name"> {{ $user[0]->full_name }} </p>
                  <a class="email" href="#">{{ $user[0]->email }}</a>
                  <p class="batch"> {{ $user[0]->department_name }}, {{ $user[0]->batch->batch_name }}</p>
                </div>
              </div>
              <div class="card mb-4">
                            <div class="card-body overview">
                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">About</h2>

                                    <div class="intro-title-content">
                                        <p>{{ $user[0]->about}}</p>
                                    </div>
                                </div>

                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">Location</h2>
                                    <div class="intro-title-content">
                                        @foreach($user[0]->locations as $location)
                                            <p>Address: {{ $location->address}}</p>
                                            <p>City: {{ $location->city}}</p>
                                            <p>Country: {{ $location->country}}</p>
                                            <p>Phone Number: {{ $location->phone}}</p>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">Education</h2>
                                    <div class="intro-title-content">
                                      @foreach($user[0]->educations as $education)
                                        <p>Education:{{$education->education_name}}</p>
                                        <p>Institute: {{$education->institute_name}}</p>
                                        <p>Started at:{{$education->started_at }}</p>
                                        <p>End at:{{$education->end_at}}</p>
                                        <p>Prsent:{{$education->present}}</p>
                                       @endforeach
                                    </div>
                                </div>
                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">Experience</h2>
                                    <div class="intro-title-content">
                                        @foreach($user[0]->experiences as $experience)
                                            <p>Job Title:{{$experience->job_title}}</p>
                                            <p>Company Name: {{$experience->company_name}}</p>
                                            <p>Started at:{{$experience->started_at}}</p>
                                            <p>End at:{{$experience->end_at}}</p>
                                            <p>Job Description:{{$experience->job_details}}</p>
                                            <p>Current Job Title:{{$experience->present}}</p>
                                         @endforeach
                                    </div>
                                </div>
                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">Skills</h2>
                                    <div class="intro-title-content">
                                        @foreach($user[0]->skills as $skill)
                                            <p>Skills Name: {{$skill->skill_name}}</p>
                                            <p>Experience Level: {{$skill->experience_label}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Alumni Association</a> &copy; 2019
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <!-- Models of different tables -->

</body>
</html>

@endsection