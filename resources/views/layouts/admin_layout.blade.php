<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin of Alumni Association</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('backend/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/node_modules/chartist/dist/chartist.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.html')}}" />

    @yield('run_custom_css_file')
    @yield('run_custom_css')
</head>
<body class="sidebar-dark">
    


    @yield('content')


    <!-- Script tag -->
    @yield('run_custom_js_file')
    @yield('run_custom_jquery')
      <script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('backend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
      <script src="{{asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
      <script src="{{asset('backend/node_modules/flot/jquery.flot.js')}}"></script>
      <script src="{{asset('backend/node_modules/flot/jquery.flot.resize.js')}}"></script>
      <script src="{{asset('backend/node_modules/flot/jquery.flot.categories.js')}}"></script>
      <script src="{{asset('backend/node_modules/flot/jquery.flot.pie.js')}}"></script>
      <script src="{{asset('backend/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
      <script src="{{asset('backend/node_modules/rickshaw/rickshaw.min.js')}}"></script>
      <script src="{{asset('backend/node_modules/chartist/dist/chartist.min.js')}}"></script>
      <script src="{{asset('backend/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
      <script src="{{asset('backend/node_modules/chart.js/dist/Chart.min.js')}}"></script>
      <script src="{{asset('backend/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
      <script src="{{asset('backend/js/off-canvas.js')}}"></script>
      <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
      <script src="{{asset('backend/js/misc.js')}}"></script>
      <script src="{{asset('backend/js/settings.js')}}"></script>
      <script src="{{asset('backend/js/dashboard_1.js')}}"></script>
</body>
</html>
