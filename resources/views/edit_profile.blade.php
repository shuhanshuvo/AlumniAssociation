@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.navbar')
<div class="profile-info">
    <div class="container">
        <div class="shadow">
            <div class="row">
                <div class="col-lg-1">

                </div>

                <div class="col-lg-10">
                    <div class="container">
                        <div class="title">
                            <p class="text-center" style="color: green;font-size: 18px;">
                                <?php

                                    $message = Session::get('message');
                                    if ($message) {
                                        echo $message;
                                        Session::put('message', null);
                                    }

                                ?>
                            </p>
                            <h3>Fill in your profile information</h3>
                            <div class="line"></div>
                        </div>
                        <div class="alumni-profile-img">
                            <div class="row">
                                <div class="col-md-5">

                                </div>
                                <div class="col-md-4">
                                    <div class="user-profile-image">
                                        <img src="{{url('uploads/'.Auth::user()->avatar)}}"
                                             class="user-pict-img" alt=""/>
                                        <a href="#" data-toggle="modal" data-target="#image">
                                            <i class="fa fa-camera"></i>
                                        </a>
                                    </div>
                                <div class="col-md-3">

                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="introduction">
                           <div class="intro-title">
                               <span>About You</span>
                               <span class="tools">
                                   <a href="#" data-toggle="modal" data-target="#intro">
                                       <i class="fa fa-edit"></i>
                                   </a>
                               </span>
                           </div> 
                        </div>

                        <div class="education">
                            <div class="intro-title">
                               <span> Education</span>
                               <span class="tools">
                                   <a href="#" data-toggle="modal" data-target="#education">
                                       <i class="fa fa-edit"></i>
                                   </a>
                               </span>
                           </div>
                        </div>

                        <div class="experience">
                            <div class="intro-title">
                               <span> Experience</span>
                               <span class="tools">
                                   <a href="#" data-toggle="modal" data-target="#experience">
                                       <i class="fa fa-edit"></i>
                                   </a>
                               </span>
                           </div>
                        </div>

                        <div class="skills">
                           <div class="intro-title">
                               <span>Skills</span>
                               <span class="tools">
                                   <a href="#" data-toggle="modal" data-target="#skills">
                                       <i class="fa fa-edit"></i>
                                   </a>
                               </span> 
                          </div>
                        </div>

                        <div class="location">
                           <div class="intro-title">
                               <span>Location</span>
                               <span class="tools">
                                   <a href="#" data-toggle="modal" data-target="#location">
                                       <i class="fa fa-edit"></i>
                                   </a>
                               </span>
                           </div> 
                        </div>
                    </div>
                

                <div class="col-lg-1">

                </div>

            </div>
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
            <form action="{{ url('/user_profile') }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="file" class="form-control" name="avatar">
              </div>
            
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
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
              {{ csrf_field() }}
                <div class="form-group">
                    <label for="introduction">ABOUT YOU</label>
                    <textarea type="text" class="form-control" required="" name="department_alumni_introduction"
                      cols="7" rows="5" placeholder="Say something about yourself..." style="resize: none;">{{ $user->about}}</textarea>
                </div>
            
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Update</button>

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
              {{ csrf_field() }}
                <div class="form-group">
                    <label for="education">Name of University</label>
                    <input type="text" value="{{$edu->institute_name}}" class="form-control" placeholder="Name of university" required=""/>
                </div>

                <div class="form-group">
                    <label for="education">Type</label>
                    <select class="form-control">
                        <option class="hidden">Education type</option>
                        <option @if($edu->education_name == 'Bachelor') selected = "selected" @endif>Bachelor</option>
                        <option @if($edu->education_name == 'Masters') selected = "selected" @endif>Masters</option>
                        <option @if($edu->education_name == 'Other') selected = "selected" @endif>Other</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Starting year</label>
                            <select class="form-control">
                                <option class="hidden">--select a year--</option>
                                <option @if($edu->started_at == '2015') selected = "selected" @endif>2015</option>
                                <option @if($edu->started_at == '2016') selected = "selected" @endif>2016</option>
                                <option @if($edu->started_at == '2017') selected = "selected" @endif>2017</option>
                            </select>
                        </div>
                    </div>

                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Ending year/Current</label>
                            <select class="form-control">
                                <option class="hidden">--select a year--</option>
                                <option @if($edu->end_at == '2015') selected = "selected" @endif>2015</option>
                                <option @if($edu->end_at == '2016') selected = "selected" @endif>2016</option>
                                <option @if($edu->end_at == '2017') selected = "selected" @endif>2017</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="education">Present Education Title</label>
                    <input type="text" name="present" value="{{$edu->present}}" class="form-control">
                </div>
            
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
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
              {{ csrf_field() }}
                <div class="form-group">
                    <label for="experience">Job Title</label>
                    <input type="text" value="{{$experience->job_title}}" class="form-control" placeholder="Enter Job Title" name="job_title">
                </div>

                <div class="form-group">
                    <label for="experience">Company</label>
                    <input type="text" value="{{$experience->company_name}}" class="form-control" placeholder="Enter Company Name" name="company_name">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Starting year</label>
                            <select class="form-control">
                               <option class="hidden">--select a year--</option>
                                <option @if($experience->started_at == '2015') selected = "selected" @endif>2015</option>
                                <option @if($experience->started_at == '2016') selected = "selected" @endif>2016</option>
                                <option @if($experience->started_at == '2017') selected = "selected" @endif>2017</option>
                            </select>
                        </div>
                    </div>

                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="experience">Ending year/Current</label>
                            <select class="form-control">
                                <option class="hidden">--select a year--</option>
                                <option @if($experience->end_at == '2015') selected = "selected" @endif>2015</option>
                                <option @if($experience->end_at == '2016') selected = "selected" @endif>2016</option>
                                <option @if($experience->end_at == '2017') selected = "selected" @endif>2017</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="experience">Job Description</label>
                    <textarea class="form-control"  name="job_details" 
                      cols="5" rows="3" placeholder="Write your Job Details" style="resize: none;">
                      {{$experience->job_details}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="education">Current Job Title</label>
                    <input type="text"  value="{{$experience->present}}" name="present" class="form-control">
                </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
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
              {{ csrf_field() }}
                <div class="form-group">
                    <label for="skills">Type your skill</label>
                    <input type="text" value="{{$skill->skill_name}}"name="skill_name" class="form-control" placeholder="Add skill (E.g. Laravel-framework)">
                </div>

                <div class="form-group">
                    <label for="number">Experience Level</label>
                    <select class="form-control" name="experience_label">                  
                        <option class="hidden">Experience Level</option>
                        <option @if($skill->experience_label == 'Basic') selected = "selected" @endif>Basic</option>
                        <option @if($skill->experience_label == 'Intermediate') selected = "selected" @endif>Intermediate</option>
                        <option @if($skill->experience_label == 'Expert') selected = "selected" @endif>Expert</option>
                    </select>
                </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Update</button>
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
              {{ csrf_field() }}
                <div class="form-group">
                    <label for="introduction">Address</label>
                    <input type="text" class="form-control" 
                    value="{{$location->address}}"required="" name="address" placeholder="Enter your address">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="city">City</label> 
                           <input type="text" value="{{$location->city}}" class="form-control" required="" name="city" placeholder="Enter your city">
                       </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="city">Country</label> 
                           <select class="form-control" name="country">
                               <option>Bangladesh</option>
                               <option>India</option>
                               <option>Pakistan</option>
                               <option>Mayanmar</option>
                               <option>America</option>
                               <option @if($location->country == 'Bangladesh') selected = "selected" @endif>Bangladesh</option>
                               <option @if($location->country == 'India') selected = "selected" @endif>India</option>
                               <option @if($location->country == 'Mayanmar') selected = "selected" @endif>Mayanmar</option>
                               <option @if($location->country == 'Pakistan') selected = "selected" @endif>Pakistan</option>
                               <option @if($location->country == 'America') selected = "selected" @endif>America</option>
                           </select>
                       </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="number">PHONE NUMBER</label>
                    <input type="text" class="form-control" value="{{$location->phone}}" required="" name="phone" placeholder="Enter Your Phone Number">
                </div>
                
            
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             <button type="submit" class="btn btn-primary">Update</button>  
          </div>
        </form>
      </div>
  </div>
</div>
<!-- Modal for Location-->
@include('includes.footer')

@endsection