<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="">
    <title>@yield('title')</title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="{{asset('assets')}}/css/all.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    @yield('css')
    @yield('headerjs')
</head>
<body>
@include('home._header')

@include('home._slider')

@include('home._content')

@include('home._footer')


<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

@yield('footerjs')

</body>
</html>
