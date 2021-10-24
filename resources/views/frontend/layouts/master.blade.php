<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="{{ asset2('frontend/img/logo.png') }}" rel="icon">
    <link href="{{ asset2('frontend/img/logo.png') }}" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset2('frontend/css/bootstrap.min.css') }}" rel="stylesheet" >

    @yield('style-libs')

    <link rel="stylesheet" href="{{ asset2('frontend/css/style.css') }}">
    <title>网站</title>

    @yield('styles')
</head>
<body>
<header>
    <!-- Navbar Light -->
    @include('frontend.layouts.nav')
    <!-- End Navbar -->

    @yield('header')
</header>

@yield('content')

@include('frontend.layouts.footer')

<script src="{{ asset2('frontend/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset2('frontend/js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset2('frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>

@yield('scripts')
</body>
</html>
