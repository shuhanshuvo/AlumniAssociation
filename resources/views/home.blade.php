@extends('layouts.master')
<!-- Home Section -->
@section('content')
@php
$comitees = App\ComiteeUser::all();
   @endphp
@include('includes.menubar')
<div class="first-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              @php
                $i = 0;
              @endphp
                @foreach ($sliders as $slider)
                  
                  <li data-target="#myCarousel" data-slide-to="{{$i}}" class="<?php if($i == 0) {echo " active";}?>"></li>
                @php
                $i++;
                @endphp
                @endforeach
                
            </ol>
            <div class="carousel-inner">
              @php
              $i= 0;
              @endphp
               @foreach($sliders as $sliders)
              
                <div class="carousel-item <?php if($i == 0) {echo " active";}?>">
                @php
                $i++;
                @endphp
                <img class="first-slide" src="{{('uploads/images/'.$sliders->image)}}">
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1>{{$sliders->title}}</h1>
                    <p>{{$sliders->sub_title}}</p>
                  </div>
                </div>
              </div>
                @endforeach

             
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
       
      </div>
       
      <div class="col-md-4">
        <div class="profile-tabs">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="alumni-tab" data-toggle="tab" href="#alumni" role="tab" aria-controls="alumni" aria-selected="true">Alumni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#committee" id="committee-tab" data-toggle="tab" role="tab" aria-controls="committee" aria-selected="false">Committee</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="alumni" role="tabpanel" aria-labelledby="alumni-tab">
              @php
              $i = 0;
              @endphp
               @foreach( $users as $user)
                @if($i == 5)
                  @php break; @endphp
                @endif
                @php
                $i++;
                @endphp
                    <a href="{{'/alumni_profile/'.$user->id}}">
                      <div class="alumni-area">
                        <img src="uploads/images/@if($user->avatar){{$user->avatar}}@else{{("avatar.png")}} @endif">
                        <h4>{{$user->full_name}}</h4>
                        <p>@if($user->present){{$user->present}}@else not updated @endif</p>
                      </div>
                    </a>
                 @endforeach 
                {{-- @else
                    @for ($i = 0; $i < 5; $i++)
                    <a href="{{'/alumni_profile/'.$users[$i]->id}}">
                        <div class="alumni-area">
                          <img src="uploads/images/@if($users[$i]->avatar){{$users[$i]->avatar}}@else{{("avatar.png")}} @endif">
                          <h4>{{$users[$i]->full_name}}</h4>
                          <p>{{$users[$i]->present}}</p>
                        </div>
                      </a>
                    @endfor
                @endif --}}

              <a href="{{ url('/alumni_list') }}" class="btn btn-primary" style="float: right">Next</a>
          </div>

          <div class="tab-pane fade" id="committee" role="tabpanel" aria-labelledby="committee-tab">
            @php
              $i = 0;
              @endphp
               @foreach( $comitees as $comitee)
                @if($i == 5)
                  @php break; @endphp
                @endif
                @php
                $i++;
                @endphp
                    <a href="{{'/alumni_profile/'.$comitee->user->id}}">
                      <div class="alumni-area">
                        <img src="uploads/images/@if($comitee->user->avatar){{$comitee->user->avatar}}@else{{("avatar.png")}} @endif">
                        <h4>{{$comitee->user->full_name}}</h4>
                        <p>@if($comitee->comitee->designation){{$comitee->comitee->designation}}@else not updated @endif</p>
                      </div>
                    </a>
                 @endforeach 

              <a href="{{ url('/committee') }}" class="btn btn-primary" style="float: right">Next</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about">
    <section class="page-content-wrap">
       <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 m-auto" style="background-color: #fff;">
              <div class="about_text">
                  <span class="year">2019</span>
                    <img src="{{asset('style/img/Alumni-Banner2.jpg')}}" class="img-fluid img-left">
                    <h4>Welcome to University of Noakhali Science & Technology University.</h4>
                    <p style="text-align: justify;margin-right: 18px;">An alumni association is an association of graduates or, more 
                    broadly, of former students (alumni). Alumni associations can 
                    help connect alumni, friends, and students and promote the 
                    University. The purpose of this system is to provide clear guidance for the operation of alumni associations supporting campuses of the University of Noakhali Science & Technology University. <br><br>
                    The main goal of this system is to allow old and new students of a university to communicate with each other. New students don’t know about alumni students who are already completed their graduation. For that reason, we would like to create a project as name Alumni Association Info where all the information of alumni students would given in their own profile. When any new student want to know about their seniors, they will search in search option. After completing the graduation, students are searching the job at different company. But they have no idea about these company.<br><br>

                    In this Alumni Association info, all the information of Alumni Association members would given by their job category wise in their profile. They would know about these company from their senior brothers/sisters if any senior works there. Then they will contact with them for this job purpose in chat section. Now-a-days, all the students are activated in different kinds of social media like facebook, linkedin, google-plus, twitter. All the information will update by facebook and linkedin in future.
                  </p>
              </div>
            </div>
          </div> 
        </div>
    </section>
</div>
<footer class="footer">
  <div class="overlay">
    <div class="container">
        <div class="row">
           <p class="pull-left">Copyright &copy; all rights reserved!</a></p>
           <p class="pull-right">Developed by <a href="#">Shuhan Shuvo and<a href="#">Sultana Faria</a></p>
        </div>
    </div>
  </div>
</footer>

@endsection