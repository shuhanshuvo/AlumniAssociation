@extends('layouts.master')
<!-- Home Section -->
@section('content')

@include('includes.menubar')
<div class="home-section">
    <div class="dark-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="change_password">
                        <p>Please give your new password.</p>
                        <div class="section-header">
                            <h2>RESET PASSWORD?</h2>
                        </div>
                        @if(count($errors)>0)
                        <div class="alert alert-danger" style="max-width: 500px;">
                           <strong>Error</strong> 
                              <ul>
                             @foreach($errors->all() as $error)
                             <li>{{ $error }}</li>
                            @endforeach
                             </ul>
                        </div>

                        @endif
                                            
                        <form class="reset_form" method="post" action="{{route('password.nowreset')}}">
                            {{ csrf_field() }}
                             <input type="hidden"  name="token" value="{{$token}}">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" value="{{ $email ?? old('email') }}" class="form-control" placeholder="Email Address">
                        
                            <label for="email">New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="New Password">



                            <label for="email">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <input type="submit" value="Change Password" class="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection