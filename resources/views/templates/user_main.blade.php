<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>@yield('title')</title>
    <link rel="icon" href="{{URL::asset('assets/images/fav.png')}}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{URL::asset('assets/css/main.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">

</head>

<body>

    @yield('page')

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{URL::asset('assets/js/main.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/script.js')}}"></script>
    <script src="{{URL::asset('assets/js/map-init.js')}}"></script>

</body>

</html>