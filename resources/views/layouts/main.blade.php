<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta charset="utf-8">
    <title>World Offshore Banks - @yield('title')</title>
    <!-- Stylesheets -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>
<div class="page-wrapper">
<div class="preloader"></div>
@include('layouts.header')
    @yield('content')

@include('layouts.footer')
</div>
<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/sticky.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/main.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDt10JO5Gyn2NaeLaWvKOHcMbFP72KoaBY"></script>
<script src="/js/map-script.js"></script>
</body>
</html>
