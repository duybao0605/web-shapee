<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo">
            <a href="/"><span><img src="{{asset('front-end/assets/img/logo.png')}}" alt="logo"></span> ShapeeCloud<span>.</span>
            
            </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            
            @if(Auth::check())
                <li><a class="nav-link scrollto bi bi-box-arrow-right" href="/logout">Logout<i class="bi bi-box-arrow-right"></i></a></li>
                
            @else
                <li><a class="nav-link scrollto" href="/login">Login</a></li>
            @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>