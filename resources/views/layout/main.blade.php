<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kamleshyadav.com/html/healthcare/bootstrap5/healthcare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 14:01:35 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beneth Emmanuel</title>
    <link rel="stylesheet" href="{{asset ('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/font.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
</head>

<body>

    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <script src="{{ asset ('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset ('assets/js/swiper.min.js')}}"></script>
    <script src="{{ asset ('assets/js/SmoothScroll.min.js')}}"></script>
    <script src="{{ asset ('assets/js/custom.js')}}"></script>


</body>
</html>    