<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-info">
        <div class="profile">
            <img src="{{ url('uploads/images/'.Auth::user()->avatar) }}" alt="">
        </div>
        <div class="details">
            <p class="user-name">{{ auth()->user()->full_name }}</p>
            <p class="designation">{{ auth()->user()->designation }}</p>
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/add_slider')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Add Slider</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/all_slider')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Slider</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/constitution')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Add Constitution</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/alumni">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Alumni</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/batch">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Add Batch</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/session">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Add session</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/add_comitee')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add Committee</span>
            </a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="{{url('/add_designation')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add designation</span>
            </a>
        </li>
    </ul>
</nav>