@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')

<section id="committe">
      <div class="section-header">
        <h3>Our Committe</h3>
        <div class="line"></div>
      </div>

      <div class="container">
        <div class="row">
          @foreach( $comitees as $committee)
          <div class="col-md-3">
            <div class="committe-area">
              <img src="uploads/images/@if($committee->user->avatar){{$committee->user->avatar}}@else{{("avatar.png")}} @endif">
            </div>
            <div class="committe-intro">
              <h4>{{$committee->user->full_name}}
                <p class="committe-deg">@if($committee->comitee->designation){{$committee->comitee->designation}}@else not updated @endif</p>
              </h4>
            </div>
          </div>
          @endforeach
        </div>
      </div>
   </section>
@endsection