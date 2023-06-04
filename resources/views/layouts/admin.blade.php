<!DOCTYPE html>
<html lang="en" @if(App::isLocale('ar')) dir="rtl"@endif>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Broker System">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="alaa odeh">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{asset('assets/css/lime.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
@stack('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->





    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <![endif]-->
</head>
<body >






{{--<div class="lime-header">--}}

{{--</div>--}}
@yield('content')


<!-- Javascripts -->
<script src="{{asset('assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>



@stack('scripts')
</body>
</html>