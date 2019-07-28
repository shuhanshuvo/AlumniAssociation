@extends('layouts.admin_layout')

@section('content')
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-center mb-3">Admin Login</h3>
              <form action="{{ url('/dashboard') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" class="form-control" name="admin_email">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="text" class="form-control" name="admin_password">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <small class="text-center d-block">Don't have an Account?<a href="#"> Sign Up</a></small>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  @endsection
