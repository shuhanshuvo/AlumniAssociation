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
                    <h3 style="margin-top: 100px;">Please Login to continue</h3>

                    <form class="login-form" action="{{ url('/user_login') }}" method="POST">
                        {{ csrf_field() }}
                        <p class="text-center" style="color: green;font-size: 17px;">
                            <?php
                                $message = Session::get('message');
                                if($message){
                                    echo $message;
                                    Session::put('message', null);
                                }
                            ?>
                        </p>
                        
                        <div class="form-group" style="margin-bottom: 12px;">
                            <input type="email" class="form-control" name="email" placeholder="Type your email address" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Type your password" value="{{old('password')}}" required="">
                        </div>
                        
                        <div class="rem-for">
                            <input tabindex="4" class="field login-checkbox" name="remember" value="First choice" type="checkbox" id="remember">
                            <label for="remember">keep me signed in</label>
                            <a href="{{ route('password.resetsss') }}" class="pull-right">Forgot Password?</a>
                        </div>

                            <div class="form-group form-button">
                            <input type="submit" id="login" value="Login to continue" class="form-control" style="margin-top: 15px;">
                        </div>
                        <!--
                        <p class="text-center" style="padding-bottom: 5px;border-bottom: 1px solid #fff;">Or Sign in with</p>

                        <div class="d-flex justify-content-center mb-4">
                            <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                            <a href="#" class="linkedin-login btn btn-linkedin">Linkedin</a>
                        </div>
                    -->

                        <p class="login">Don't have an account?<a href="{{ url('/user_registration') }}" style="color: #fff;text-decoration: underline;"> SignUp</a></p>
                    </form>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')

@endsection