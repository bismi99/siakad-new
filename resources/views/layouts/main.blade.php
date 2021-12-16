<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIAKAD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    @include('include.style')

</head>

<body>
    <!-- Start Header Top Area -->
    @include('include.header')
    <!-- End Header Top Area -->

    <!-- Menu start -->
    @include('include.menu')
    <!-- Menu End-->

    @yield('content')

    <!-- Start Footer area-->
    @include('include.footer')
    <!-- End Footer area-->

    @include('include.script')
</body>

</html>
