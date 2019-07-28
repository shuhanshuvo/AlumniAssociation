@extends('layouts.admin_layout')

@section('content')

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ url('/dashboard') }}">
          <h1 style="color: #222222;">Admin</h1>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">2</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">{{ auth()->user()->full_name }}</p>
                </div>
              </a>
              <a class="dropdown-item" href="{{ url('/admin_logout') }}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-warning">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Logout</p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
       @include('admin.dashboard.nav')
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
              <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                  <a href="/admin/alumni/">
                    <div class="card-body">
                      <h2 class="card-title">Alumni</h2>
                    </div>
                  </a>
                  
                  <div class="dashboard-chart-card-container">
                    <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                  <a href="{{url('add_designation')}}">
                    <div class="card-body">
                      <h2 class="card-title">Committe</h2>
                    </div>
                  </a>
                  
                  <div class="dashboard-chart-card-container">
                    <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                  <a href="https://drive.google.com/open?id=1q5C_K5yG1WKrZ7caN8jmvyQvhvxaeA8K">
                    <div class="card-body">
                    <h2 class="card-title">Constitution</h2>
                  </div>
                  </a>
                  
                  <div class="dashboard-chart-card-container">
                    <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                  <a href="#">
                    <div class="card-body">
                    <h2 class="card-title">Batch</h2>
                  </div>
                  </a>
                  
                  <div class="dashboard-chart-card-container">
                    <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                  </div>
                </div>
              </div>
          </div>
            @yield('adminContent')
        </div>

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">CSTE Alumni Association</a> &copy; 2019
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  
  @endsection