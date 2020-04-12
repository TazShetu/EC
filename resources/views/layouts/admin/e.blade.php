<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Panel">
    <meta name="keywords" content="admin,dashboard">
{{--    <meta name="author" content="Shetu">--}}
<!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>
        @yield('title', 'Admin Panel')
    </title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{asset('e-admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('e-admin/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('e-admin/assets/plugins/icomoon/style.css')}}" rel="stylesheet">
    <link href="{{asset('e-admin/assets/plugins/uniform/css/default.css')}}" rel="stylesheet"/>
    <link href="{{asset('e-admin/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('e-admin/assets/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet">

@yield('link')

<!-- Theme Styles -->
    <link href="{{asset('e-admin/assets/css/ecaps.min.css')}}" rel="stylesheet">
    <link href="{{asset('e-admin/assets/css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    <![endif]-->

    @yield('style')

</head>
<body>

<!-- Page Container -->
<div class="page-container">

    <!-- Page Sidebar -->
    @include('partial.e-admin.sidebar')
    <!-- /Page Sidebar -->

    <!-- Page Content -->
    <div class="page-content">

        <!-- Page Header -->
        @include('partial.e-admin.header')
        <!-- /Page Header -->

        @yield('content')

    </div>
    <!-- /Page Content -->

</div>
<!-- /Page Container -->


<!-- Javascripts -->
<script src="{{asset('e-admin/assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/uniform/js/jquery.uniform.standalone.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/d3/d3.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/nvd3/nv.d3.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('e-admin/assets/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{asset('e-admin/assets/js/ecaps.min.js')}}"></script>
<script src="{{asset('e-admin/assets/js/pages/dashboard.js')}}"></script>
</body>
</html>
