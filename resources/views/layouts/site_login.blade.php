<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- favicon CSS -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon.png')}}">
    <!-- fonts -->

    <link href="{{asset('assets/site/fonts/sfuidisplay.css')}}" rel="stylesheet">
    <!-- Icon fonts -->
    @if(App::isLocale('ar'))
        <link rel="stylesheet" href="{{asset('assets/site/css-rtl/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/css-rtl/app.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/css-rtl/animate.min.css')}}">
        <!-- Your CSS -->
        <link rel="stylesheet" href="{{asset('assets/site/css-rtl/custom.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('assets/site/css/plugins.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/css/animate.min.css')}}">
        <!-- Your CSS -->
        <link rel="stylesheet" href="{{asset('assets/site/css/custom.css')}}">
    @endif

</head>

<body class="theme-gradient-7 loaded" data-spy="scroll" data-target="#navbar-nav" data-appearance="light" data-animation="false" data-appearance="light">

<!-- =========== Start of Loader ============ -->
<div class="preloader">
    <div class="wrapper">
        <div class="blobs">
            <div class="blob-center"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
        </div>
        <div>
            <div class="loader-canvas canvas-left"></div>
            <div class="loader-canvas canvas-right"></div>
        </div>
    </div>
</div>
<!-- =========== End of Loader ============ -->

<main class="main hidden">

@yield('content')
    <!-- =========== Start of Navigation (main menu) ============ -->

    <!-- =========== End of Body ============ -->
</main>
@if(App::isLocale('ar'))
    <script src="{{asset('assets/site/js-rtl/plugins.min.js')}}"></script>
    <script src="{{asset('assets/site/js-rtl/app.js')}}"></script>
@else
    <script src="{{asset('assets/site/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/site/js/app.js')}}"></script>
@endif
</body>

</html>