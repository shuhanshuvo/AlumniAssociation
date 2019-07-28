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
                    <a class="nav-link" href="{{ url('/photo_gallery') }}">Photo Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/albums/create') }}">Create Album</a>
                </li>
            </ul>
          </div>
          </div>
      </nav>
      
      