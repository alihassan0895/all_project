
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">--}}

    <!-- Vendor CSS Files -->
    <link href="{{asset('Main/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Main/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Main/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Main/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Main/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Main/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('Main/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio - v3.6.0
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

                <div class="profile">
                    <a href="{{url('/')}}"><img src="{{asset('storage/picture/proflie.jpg')}}" alt="" class="img-fluid rounded-circle"></a>
            <h1 class="text-light"><a href="{{url('/')}}">{{ucfirst($user->name)}}</a></h1>
{{--            @if (Route::has('login'))--}}
{{--                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}


{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
            <div class="social-links mt-3 text-center">
@foreach($social as $link)
                                    <a target="_blank" href="{{$link->url}}" class="twitter">
                                        {!! $link->icon !!}

                                    </a>

@endforeach


            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{url($url)}}#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="{{url($url)}}#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span> About</span></a></li>
                <li><a href="{{url($url)}}#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span> Experience</span></a></li>
                <li><a href="{{url($url)}}#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="{{url($url)}}#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

