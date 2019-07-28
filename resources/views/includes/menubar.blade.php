<div class="home" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a href="/">
          <img src="{{asset('style/img/Alumni-Logo.jpg')}}">
        </a>
  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/public_post') }}">Jobs</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Alumni
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @php
                      $all_batch = App\Batch::all();
                  @endphp
                  @foreach($all_batch as $batch)
                  <a class="dropdown-item" href="{{ url('/batch_wise/'.$batch->id) }}">{{$batch->batch_name}}</a>
                  @endforeach
                </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="https://drive.google.com/open?id=1q5C_K5yG1WKrZ7caN8jmvyQvhvxaeA8K">Constitution</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ url('/user_login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/user_registration') }}">Sign Up</a>
            </li>
            
          </ul>
        </div>
      </div>
  </nav>
  
  