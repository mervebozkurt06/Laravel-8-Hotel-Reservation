<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ asset('assets')}}/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

    @yield('css')
    @yield('javascript')

</head>

<body>

@include('admin._header')
@include('admin._sidebar')
@yield('content')
@include('admin._footer')
@yield('footer')


</body>

</html>
