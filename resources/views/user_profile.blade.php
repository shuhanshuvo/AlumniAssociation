@extends('layouts.app')

@section('content')

<body class="sidebar-dark">
  <div class="container-scroller">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="/">
                <img src="{{asset('style/img/Alumni-Logo.jpg')}}">
            </a>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->full_name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <!-- <a class="dropdown-item" href="{{ url('/albums') }}">Add Photo</a> -->
                  <a class="dropdown-item" href="{{ url('/job_post') }}">Post a New Job</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('/user_logout') }}">Logout</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/edit_profile/'.$user->id) }}">

                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Edit Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/delete_profile') }}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Delete Profile</span>
              </a>
          </ul>
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
                      <img src="{{ url('uploads/images/'.Auth::user()->avatar) }}"
                           class="user-pict-img" alt="{{Auth::user()->avatar}}"/>
                      <a href="#" data-toggle="modal" data-target="#image">
                          <i class="fa fa-camera"></i>
                      </a>
                  </div>

                  <p class="name"> {{ $user->full_name }}</p>
                  <a class="email" href="#">{{ $user->email }}</a>
                  <p class="batch"> {{ $user->department_name }}, {{ $user->batch->batch_name }}</p>
                </div>
              </div>
              <div class="card mb-4">
                            <div class="card-body overview">
                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">About</h2>
                                    <span class="tools">
                                       <a href="#" data-toggle="modal" data-target="#intro">
                                           <i class="fa fa-plus"></i>
                                       </a>
                                       <a href="#" data-toggle="collapse" aria-expanded=" false" data-target="#introduction">
                                          <i class="fa fa-eye"></i>
                                        </a>
                                   </span>

                                   <div class="collapse" id="introduction">
                                     <div class="intro-title-content">
                                         <p>{{ $user->about}}</p>
                                     </div>
                                   </div>
                                </div>

                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">Location</h2>
                                    <span class="tools">
                                       <a href="#" data-toggle="modal" data-target="#location">
                                           <i class="fa fa-plus"></i>
                                       </a>
                                       <a href="#" data-toggle="collapse" aria-expanded="false" data-target="#location-system">
                                           <i class="fa fa-eye"></i>
                                       </a>
                                   </span>
                                   <div class="collapse" id="location-system">
                                       <div class="intro-title-content">

                                        @foreach($user->locations as $location)

                                           <p>Address: {{ $location->address}}</p>
                                           <p>City: {{ $location->city}}</p>
                                           <p>Country: {{ $location->country}}</p>
                                           <p>Phone: {{ $location->phone}}</p>
                                       @endforeach

                                       </div>
                                   </div>
                                </div>

                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">Education</h2>
                                    <span class="tools">
                                       <a href="#" data-toggle="modal" data-target="#education">
                                            <i class="fa fa-plus"></i>
                                       </a>
                                       <a href="#" data-toggle="collapse" aria-expanded="false" data-target="#edu-system">
                                           <i class="fa fa-eye"></i>
                                       </a>
                                   </span>
                                   <div class="collapse" id="edu-system">
                                       <div class="intro-title-content">
                                      
                                      @foreach($user->educations as $education)
                                           <p>Institute Name:{{$education->institute_name}}</p>
                                           <p>Education Name:{{$education->education_name}}</p>
                                           <p>Started at:{{$education->started_at }}</p>
                                           <p>End at:{{$education->end_at}}</p>
                                           <p>Prsent:{{$education->present}}</p>
                                      @endforeach

                                       </div>
                                   </div>
                                </div>
                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">Experience</h2>
                                    <span class="tools">
                                       <a href="#" data-toggle="modal" data-target="#experience">
                                           <i class="fa fa-plus"></i>
                                       </a>

                                       <a href="#" data-toggle="collapse" aria-expanded="false" data-target="#exp-system">
                                           <i class="fa fa-eye"></i>
                                       </a>
                                   </span>
                                   <div class="collapse" id="exp-system">
                                       <div class="intro-title-content">

                                        @foreach($user->experiences as $experience)
                                           <p>Job Title:{{$experience->job_title}}</p>
                                           <p>Comapany Name:{{$experience->company_name}}</p>
                                           <p>Started at:{{$experience->started_at}}</p>
                                           <p>End at:{{$experience->end_at}}</p>
                                           <p>Job Description:{{$experience->job_details}}</p>
                                           <p>Current Job Title:{{$experience->present}}</p>
                                        @endforeach

                                      
                                       </div>
                                   </div>
                                </div>
                                <div class="wrapper about-user">
                                    <h2 class="card-title mt-4 mb-3">Skills</h2>
                                    <span class="tools">
                                       <a href="#" data-toggle="modal" data-target="#skills">
                                           <i class="fa fa-plus"></i>
                                       </a>

                                       <a href="#" data-toggle="collapse" aria-expanded="false" data-target="#skill">
                                           <i class="fa fa-eye"></i>
                                       </a>
                                   </span>
                                   <div class="collapse" id="skill">
                                       <div class="intro-title-content">
                                      
                                      @foreach($user->skills as $skill)

                                           <p>Skills Name:{{$skill->skill_name}}</p>
                                           <p>Experience Level:{{$skill->experience_label}}</p>

                                      @endforeach
                                       </div>
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

<!-- Modal for profile image -->
<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload your Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ URL::to('user_profile') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="file" class="form-control" name="avatar" required="">
              </div>
            
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" value="Upload" name="submit">Add</button>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
          </form>
      </div>
  </div>
</div>
<!-- Modal for profile image -->

<!-- Modal for introduction-->
<div class="modal fade" id="intro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Introduction</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('/user_introduction') }}" method="post">
              {{csrf_field() }}
                <div class="form-group">
                    <label for="introduction">ABOUT YOU</label>
                    <textarea type="text" class="form-control" required="" name="about"
                      cols="7" rows="5" placeholder="Say something about yourself..." style="resize: none;">
                    </textarea>
                </div>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> 
          </div>
          </form>
      </div>
  </div>
</div>
<!-- Modal for introduction-->

<!-- Modal for education-->
<div class="modal fade" id="education" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('/user_education') }}" method="post">
              {{csrf_field() }}
                <div class="form-group">
                    <label for="education">Name of University</label>
                    <input type="text" class="form-control" name="institute_name" placeholder="Name of university" required=""/>
                </div>

                 <div class="form-group">
                    <label for="education">Type</label>
                    <select class="form-control" name="education_name">
                        <option class="hidden">Education type</option>
                        <option>Bachelor</option>
                        <option>Masters</option>
                        <option>Other</option>
                       
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Starting year</label>
                            <select class="form-control" name="started_at">
                                <option class="hidden">--select a year--</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                            </select>
                        </div>
                    </div>

                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Ending year</label>
                            <select class="form-control" name="end_at">
                                <option class="hidden">--select a year--</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="education">Present Education Title</label>
                    <input type="text" name="present_institute" class="form-control">
                </div>
            
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
          </form>
      </div>
  </div>
</div>
<!-- Modal for education-->

<!-- Modal for experience-->
<div class="modal fade" id="experience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('/user_experience') }}" method="post">
              {{csrf_field() }}
                <div class="form-group">
                    <label for="experience">Job Title</label>
                    <input type="text" class="form-control" placeholder="Enter Job Title" name="job_title">
                </div>

                <div class="form-group">
                    <label for="experience">Company</label>
                    <input type="text" class="form-control" placeholder="Enter Company Name" name="company_name">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Starting year</label>
                            <select class="form-control" name="started_at">
                                <option class="hidden">--select a year--</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                            </select>
                        </div>
                    </div>

                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Ending year/Current</label>
                            <select class="form-control" name="end_at">
                                <option class="hidden">--select a year--</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="experience">Job Description</label>
                    <textarea class="form-control" name="job_details" 
                      cols="5" rows="3" placeholder="Write your Job Details" style="resize: none;">
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="education">Current Job Title</label>
                    <input type="text" name="present" class="form-control">
                </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
  </div>
</div>
<!-- Modal for experience-->

<!-- Modal for skills-->
<div class="modal fade" id="skills" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Skills</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('/user_skills') }}" method="post">
              {{csrf_field() }}
                <div class="form-group">
                    <label for="skills">Type your skill</label>
                    <input type="text" name="skill_name" class="form-control" placeholder="Add skill (E.g. Laravel-framework)">
                </div>

                <div class="form-group">
                    <label for="number">Experience Level</label>
                    <select class="form-control" name="experience_label">                  
                        <option class="hidden">Experience Level</option>
                        <option>Basic</option>
                        <option>Intermediate</option>
                        <option>Expert</option>   
                    </select>
                </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
          </form>
      </div>
  </div>
</div>
<!-- Modal for skills-->

<!-- Modal for Location-->
<div class="modal fade" id="location" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="{{ url('/user_location') }}" method="post">
              {{csrf_field() }}
                <div class="form-group">
                    <label for="introduction">Address</label>
                    <input type="text" class="form-control" required="" name="address" placeholder="Enter your address">
                </div>

                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                         <label for="city">City</label> 
                         <input type="text" class="form-control" required="" name="city" placeholder="Enter your city">
                     </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="city">Country</label>
                         <select class="form-control" name="country">
                           <option>Bangladesh</option>
                           <option>India</option>
                           <option>Pakistan</option>
                           <option>America</option>
                         </select>
                     </div>
                  </div>
                </div>

                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input type="text" class="form-control" required="" name="phone" placeholder="Enter Your Phone Number">
                </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             <button type="submit" class="btn btn-primary">Add</button>  
          </div>
        </form>
      </div>
  </div>
</div>
<!-- Modal for Location-->

</body>
</html>

@endsection