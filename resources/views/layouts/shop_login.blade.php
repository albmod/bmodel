<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'eTrade') }} || Sign In</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}">

    <!-- CSS
    ============================================ -->
    @if(App::isLocale('ar'))
        <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/bootstrap.rtl.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/base.css')}}">
        <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/style.min.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('assets/shop/css/vendor/bootstrap.min.css')}}">


        <link rel="stylesheet" href="{{asset('assets/shop/css/vendor/base.css')}}">
        <link rel="stylesheet" href="{{asset('assets/shop/css/style.min.css')}}">
    @endif


    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{asset('assets/shop/css-rtl/vendor/magnific-popup.css')}}">



    <style>
        [type="email"], [type="number"] {
            direction: rtl;
        }
    </style>

@stack('styles')


<body>
@yield('content')


<!-- JS
============================================ -->
<script src="{{asset('assets/shop/js/vendor/modernizr.min.js')}}"></script>
<!-- jQuery JS -->
<script src="{{asset('assets/shop/js/vendor/jquery.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/shop/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/js.cookie.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/sal.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/counterup.js')}}"></script>
<script src="{{asset('assets/shop/js/vendor/waypoints.min.js')}}"></script>

<!-- Main JS -->
@if(App::isLocale('ar'))
    <script src="{{asset('assets/shop/js-rtl/rtl_main.js')}}"></script>
@else
    <script src="{{asset('assets/shop/js/ltr_main.js')}}"></script>
@endif
</body>

</html>