<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

    {{-- <title>Eduor || Online Education Learning HTML Template</title> --}}

    @yield('title')

    <link rel="icon" type="image/png" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body class="home_3">
    <!--=================================
            TOPBAR 2 START
        ==================================-->
    <section class="tf__topbar tf__topbar_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 d-none d-md-block">
                    <div class="tf__topbar_left d-flex flex-wrap align-items-center">
                        <p>Visit our social pages:</p>
                        <ul class="d-flex flex-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="tf__topbar_right">
                        <ul class="d-flex flex-wrap">
                            <li><a href="#">login</a></li>
                            <li><a href="#">your help</a></li>
                            <li>
                                <a href="#"><img src="{{ asset('frontend/images/language_3.jpg') }}" alt="language">
                                    english</a>
                                <ul class="tf__other_language">
                                    <li><a href="#"><img src="{{ asset('frontend/images/language_2.jpg') }}"
                                                alt="language"> japanis </a></li>
                                    <li><a href="#"><img src="{{ asset('frontend/images/language_1.jpg') }}"
                                                alt="language"> chines</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            TOPBAR 2 END
        ==================================-->


    <!--=================================
            MAIN MENU 3 START
        ==================================-->
    <nav class="navbar navbar-expand-lg main_menu main_menu_3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home-3') }}">
                <img src="{{ asset('frontend/images/logo3.png') }}" alt="Eduor" class="img-fluid w-100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home-3') }}">Home <i
                                class="far fa-angle-down"></i></a>
                        <ul class="tf__droap_menu">
                            <li><a href="{{ route('home') }}">home 1</a></li>
                            <li><a href="{{ route('home-2') }}">home 2</a></li>
                            <li><a class="active" href="{{ route('home-3') }}">home 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses') }}">courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                        <ul class="tf__droap_menu">
                            <li><a href="{{ route('course_details') }}">courses details</a></li>
                            <li><a href="{{ route('blog_details') }}">blog details</a></li>
                            <li><a href="{{ route('events') }}">event</a></li>
                            <li><a href="{{ route('event_details') }}">event details</a></li>
                            <li><a href="{{ route('team') }}">team</a></li>
                            <li><a href="{{ route('team_details') }}">team details </a></li>
                            <li><a href="{{ route('error') }}">error</a></li>
                            <li><a href="{{ route('faq') }}">FAQs</a></li>
                            <li><a href="{{ route('sign_in') }}">sign in</a></li>
                            <li><a href="{{ route('sign_up') }}">sign up</a></li>
                            <li><a href="{{ route('terms_condition') }}">terms and condition</a></li>
                            <li><a href="{{ route('privacy_policy') }}">privacy policy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=================================
            MAIN MENU 3 END
        ==================================-->