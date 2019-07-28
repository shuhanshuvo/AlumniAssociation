<!DOCTYPE html>
<html>
<head>
    <title>Alumni Association Info</title>
    <!-- Meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Link tag -->
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/font-awesome.min.css')}}">
    <link href="{{asset('style/css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/dataTables.bootstrap4.min.css')}}" rel="styleshet">
    <link rel="stylesheet" type="text/css" href="{{asset('style/css/style.css')}}">
    
    @yield('run_custom_css_file')
    @yield('run_custom_css')
</head>

<body>

    @yield('content')


    <!-- Script tag -->
    @yield('run_custom_js_file')
    @yield('run_custom_jquery')
    <script src="{{asset('style/js/jquery.min.js')}}"></script>
    <script src="{{asset('style/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('style/js/popper.min.js')}}"></script>
    <script src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('style/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('style/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

</body>
</html>