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
		      <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->full_name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/user_profile') }}">Profile</a>
				  <a class="dropdown-item" href="{{ url('/albums/create') }}">Add Photo</a>
                  <a class="dropdown-item" href="{{ url('/job_post') }}">Post a Job</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('/user_logout') }}">Logout</a>
                </div>
                </li>
		    </ul>

		  </div>
	    </div>
	</nav>

