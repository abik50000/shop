<!doctype html>
<html class="no-js" lang="ru">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="/assets/css/font.awesome.css">
    <!--animate css-->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="/assets/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!--modernizr min js here-->
    <script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>
<body>

<div id="app">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</div>



  <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="/assets/js/vendor/jquery-3.4.1.min.js"></script>
    <!--popper min js-->
    <script src="/assets/js/popper.js"></script>
    <!--bootstrap min js-->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!--owl carousel min js-->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!--slick min js-->
    <script src="/assets/js/slick.min.js"></script>
    <!--magnific popup min js-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!--counterup min js-->
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <!--jquery countdown min js-->
    <script src="/assets/js/jquery.countdown.js"></script>
    <!--jquery ui min js-->
    <script src="/assets/js/jquery.ui.js"></script>
    <!--jquery elevatezoom min js-->
    <script src="/assets/js/jquery.elevatezoom.js"></script>
    <!--isotope packaged min js-->
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <!--slinky menu js-->
    <script src="/assets/js/slinky.menu.js"></script>
    <!-- Plugins JS -->
    <script src="/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>


</body>
</html>
