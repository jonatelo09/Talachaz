<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Talachaz &mdash; MultiServicios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
        </div>
    
        <div class=" py-3 bg-light" id="home-section">
        <!--<div class="container">
            <div class="row align-items-center">
            
            <div class="col-6 text-left">
                <ul class="social-media">
                <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
                <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
                <li><a href="#" class=""><span class="icon-instagram"></span></a></li>
                <li><a href="#" class=""><span class="icon-linkedin"></span></a></li>
                </ul>
            </div>
            <div class="col-6">
                <p class="mb-0 float-right">
                <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+52) 9983456795</span></a></span>
                <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">servicios@talachaz.com</span></a></span>
                </p>
                
            </div>
            </div>
        </div> -->
        </div>

        <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">
            
            <div class="col-6 col-xl-2 contenedor">
                <h1 class="mb-0 site-logo maquina"><a href="index.html" class="text-black mb-0 parpadeo"><span class="text-primary  icon-format_size"></span>
                Talachaz<span class="text-primary">.</span>com <span class="maquina-esc">&#160;</span> </a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li><a href="#home-section" class="nav-link">Home</a></li>
                    <li><a href="#services-section" class="nav-link">Servicios</a></li>
                    <li><a href="#about-section" class="nav-link">Nosotros</a></li>
                    <!--<li><a href="#special-section" class="nav-link">Special</a></li>
                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                    <li><a href="#blog-section" class="nav-link">Blog</a></li>-->
                    <li><a href="#contact-section" class="nav-link">Contacto</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                            @if (Route::has('register'))
                                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                @endif
                </ul>
                </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>
        
        </header>
        
        @yield('content')
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>