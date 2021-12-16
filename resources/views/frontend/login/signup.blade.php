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
    <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo">
            <a href="/"><span><img src="{{asset('front-end/assets/img/logo.png')}}" alt="logo"></span> ShapeeCloud<span>.</span>
            
            </a>
        </h1>
        

    </div>
</header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>Shapee Cloud</span></h1>
    <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Create new account</h2>
                        <!-- alert -->
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                            {{session('success')}}
                        </div>
                        @endif  

						@if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-times"></i> Thông báo!</h4>
				            @foreach ($errors->all() as $error) 
				                <p class="text-danger"> {{$error}} </p>
				            
                            @endforeach
                        </div>
					    @endif
                        <!-- end alert -->

						<form method="POST" action="{{ route('user.create') }}" enctype="multipart/form-data">
                            @csrf
							<input type="text" name="name" placeholder="Name" />
							<input type="email" name="email" placeholder="Email Address" />
							<input type="password" name="password" placeholder="Password" />
                            <input type="file" name="avatar"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>
    <!--/form-->
        
        </div>
    </section>
    <!-- End Hero -->


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