<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alumni Association Info</title>

  <link rel="stylesheet" href="{{asset('frontend/node_modules/mdi/css/materialdesignicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('frontend/node_modules/dropify/dist/css/dropify.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  

  <link rel="shortcut icon" href="{{asset('frontend/images/favicon.html')}}" />

    @yield('run_custom_css_file')
    @yield('run_custom_css')

</head>

<body class="sidebar-dark">

    @yield('content')


    <!-- script tag -->

    @yield('run_custom_js_file')
    @yield('run_custom_jquery')

    <script src="{{asset('frontend/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('frontend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('frontend/node_modules/dropify/dist/js/dropify.min.js')}}"></script>
    <script src="{{asset('frontend/js/off-canvas.js')}}"></script>
    <script src="{{asset('frontend/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('frontend/js/misc.js')}}"></script>
    <script src="{{asset('frontend/js/settings.js')}}"></script>
    <script src="{{asset('frontend/js/dropify.js')}}"></script>
</body>
</html>
