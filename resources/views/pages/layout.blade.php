<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medilab Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    Favicons <link href="/public/images/pages/assets/img/favicon.png" rel="icon">

    <link href="/public/plugins/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/public/plugins/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/plugins/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/public/plugins/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/public/plugins/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/public/plugins/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/public/plugins/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/public/plugins/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="/public/css/pages.css" rel="stylesheet">
    <link href="/public/css/style.css" rel="stylesheet">

    Google Fonts <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Medilab - v4.1.0
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="bi bi-phone"></i> +1 5589 55488 55
        </div>
        <div class="d-none d-lg-flex social-links align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">

    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">Николаевская ЖЦРБ</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{'/'}}">Главная</a></li>
                    <li><a class="nav-link scrollto" href="{{'about'}}">О нас</a></li>
                    <li><a class="nav-link scrollto" href="{{'services'}}">Услуги</a></li>
                    <li class="dropdown"><a href="#"><span>Выпадающее</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Выбор-1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Контакты</a></li>
                </ul>

                <!-- Authentication Links -->
            <ul>
                @if(Auth::check())
                    <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('logout') }}">Logout</a></li>

                            @if(Auth::user()->role_id==1 || Auth::user()->role_id==2)

                                <li class="nav-item">
                                    <a class="nav-link" href="{{'admin' }}">Admin</a>
                                </li>
                            @endif
                        </ul>

                    <li> <a href="{{ route('record') }}" class="btn-get-started appointment-btn scrollto"><span class="d-none d-md-inline">Записаться на прием</span></a></li>

                        @else
                    </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                @endif

            </ul>
        </nav>
    </div>
</header><!-- End Header -->

<main id="main">

@yield('content')

</main>

<script src="/public/js/jquery-2.2.3.min.js"></script>

<script src="/public/plugins/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/public/plugins/vendor/purecounter/purecounter.js"></script>
<script src="/public/plugins/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/public/plugins/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/public/plugins/vendor/bootstrap/js/bootstrap.esm.js"></script>



<script src="/public/js/pages.js"></script>
<script src="/public/js/formMail.js"></script>


</body>





</html>