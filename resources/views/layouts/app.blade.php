<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Color Admin | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('adminResource/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/css/style-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{asset('adminResource/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/plugins/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" />
    <link href="{{asset('adminResource/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('adminResource/plugins/pace/pace.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
@section('sidebar')
    这里是侧边栏
@show

<div class="container">
    @yield('content')
</div>


<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('adminResource/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{asset('adminResource/crossbrowserjs/html5shiv.js')}} "></script>
<script src="{{asset('adminResource/crossbrowserjs/respond.min.js')}}"></script>
<script src="{{asset('adminResource/crossbrowserjs/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('adminResource/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('adminResource/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{asset('adminResource/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('adminResource/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('adminResource/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('adminResource/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('adminResource/js/dashboard.min.js')}}"></script>
<script src="{{asset('adminResource/js/apps.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        Dashboard.init();
    });
</script>
</body>
</html>
