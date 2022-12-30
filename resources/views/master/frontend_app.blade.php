<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rayhan || Resume</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('frontEndAsset')}}/assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontEndAsset')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('frontEndAsset')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontEndAsset')}}/assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    @include('frontend.elements.nav')<!-- .nav-menu -->

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
@include('frontend.elements.hero_section')
<!-- End Hero -->

<main id="main">

@yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('frontend.elements.footer')
<!-- End Footer -->

<div id="preloader"></div>
<a href="{{route('home')}}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('frontEndAsset')}}/assets/vendor/purecounter/purecounter.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/vendor/aos/aos.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/vendor/typed.js/typed.min.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('frontEndAsset')}}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontEndAsset')}}/assets/js/main.js"></script>

</body>

</html>
