<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="initial-scale=1.0" name="viewport">

    <title>Shapee Cloud</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('front-end/assets/css/reset.css')}}">
    <link href="{{asset('front-end/assets/img/logo.png')}}" rel="icon">
    <link href="{{asset('front-end/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('front-end/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="{{asset('front-end/assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
        @include('frontend.layouts.topbar-section')

    <!-- ======= Header ======= -->
        @include('frontend.layouts.header')
    <!-- End Header -->
    
    <!-- ======= Hero Section ======= -->
        @include('frontend.layouts.hero-section')
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
            @include('frontend.layouts.about-section')
        <!-- End About Section -->

        <!-- ======= Skills Section ======= -->
            @include('frontend.layouts.skill-section')
        <!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->
            @include('frontend.layouts.client-section')
        <!-- End Clients Section -->

        <!-- ======= Rating Section ======= -->
            @include('frontend.layouts.rating-section')
        <!-- End Rating Section -->

        <!-- ======= Services Section ======= -->
            @include('frontend.layouts.service-section')
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
            @include('frontend.layouts.testimonials-section')
        <!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
            @include('frontend.layouts.portfolio-section')
        <!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
            @include('frontend.layouts.team-section')
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
            @include('frontend.layouts.pricing-section')
        <!-- End Pricing Section -->

        <!-- ======= Contact Section ======= -->
            @include('frontend.layouts.contact-section')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
        @include('frontend.layouts.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('front-end/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('front-end/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front-end/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('front-end/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('front-end/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('front-end/assets/vendor/php-email-form/validate.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>

</body>

</html>