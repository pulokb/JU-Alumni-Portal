<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>

    @yield('meta')
    {{-- <meta name="description" content="simple description for your site" />
    <meta name="keywords" content="keyword1, keyword2" />
    <meta name="author" content="Jobz" />

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="http://twitter.com/" />
    <meta name="twitter:title" content="Your home page title, max 140 char" /> <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char " /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="{{asset('frontend/assets/img/twittercardimg/twittercard-144-144.png')}}" />
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title" />
    <meta property="og:url" content="http://your domain here.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Your site name here" />
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <meta property="og:type" content="website" /> <!-- 'article' for single page  -->
    <meta property="og:image" content="{{asset('frontend/assets/img/opengraph/fbphoto-476-476.png')}}" />
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends here -->

    <!-- desktop bookmark -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('frontend/assets/img/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff"> --}}

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon/favicon.ico')}}" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon/favicon.ico')}}" />
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('frontend/assets/img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('frontend/assets/img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/assets/img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/assets/img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/assets/img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontend/assets/img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('frontend/assets/img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontend/assets/img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/assets/img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{asset('frontend/assets/img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('frontend/assets/img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/assets/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('frontend/assets/img/favicon/manifest.json')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.ico')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.ico')}}" />

    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
<script src="{{asset('frontend/assets/vendor/css3-mediaqueries-js/css3-mediaqueries.js')}}"></script>
<![endif]-->

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/navbar/bootstrap-4-navbar.css')}}" />

    <!--Animate css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/animate/animate.css')}}" media="all" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/fontawesome/css/font-awesome.min.css')}}" />

    <!--owl carousel css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/owl-carousel/owl.carousel.css')}}" media="all" />

    <!--Magnific Popup css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/magnific/magnific-popup.css')}}" media="all" />

    <!--Nice Select css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/nice-select/nice-select.css')}}" media="all" />

    <!--Offcanvas css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/js-offcanvas/css/js-offcanvas.css')}}" media="all" />

    <!-- MODERNIZER  -->
    <script src="{{asset('frontend/assets/vendor/modernizr/modernizr-custom.js')}}"></script>

    <!-- Main Master Style  CSS  -->
    <link id="cbx-style" data-layout="1" rel="stylesheet" href="{{asset('frontend/assets/css/style-default.min.css')}}"
        media="all" />
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=60155a7be7f5c10011bd3474&product=sop'
        async='async'></script>


</head>

<body>


    <!--== Header Area Start ==-->
    <header id="header-area">
        <div class="preheader-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-7 col-7">
                        <div class="preheader-left">
                            <a href="mailto:info@construc.com"><strong>Email:</strong> info@alumni.bup.edu.bd</a>
                            <a href="phoneto:88-02-8000368"><strong>Hotline:</strong> 88-02-8000368</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-5 col-5 text-right">
                        <div class="preheader-right">
                            @guest
                            <a title="Login" class="btn-auth btn-auth-rev" href="{{route('login')}}">Login</a>
                            <a title="Register" class="btn-auth btn-auth" href="{{route('register')}}">Signup</a>
                            @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle btn-auth" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        {{Auth::user()->name}} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a class="dropdown-item" href="{{route('user.dashboard')}}">
                                            <span style="font-size: 15px">Dashboard</span>
                                        </a>
                                        @if (Auth::user()->status == 0)
                                        <a style="color:red">Profile is Not Active</a>
                                        @endif
                                        <a class="dropdown-item" href="{{route('user.profile.view')}}">
                                            <span style="font-size: 15px">Profile</span>
                                        </a>
                                        @if (Auth::user()->status == 1)

                                        <a class="dropdown-item" href="{{route('user.jobs.index')}}">
                                            <span style="font-size: 15px">Jobs</span>
                                        </a>
                                        <a class="dropdown-item" href="{{route('user.blogs.index')}}">
                                            <span style="font-size: 15px">Blog</span>
                                        </a>
                                        <a class="dropdown-item" href="{{route('user.zooms.index')}}">
                                            <span style="font-size: 15px">Zoom Meetings</span>
                                        </a>
                                        <a class="dropdown-item" href="/messenger">
                                            <span style="font-size: 15px">Messenger</span>
                                        </a>
                                        @endif
                                        <a class="dropdown-item" href="{{route('user.change.password')}}">
                                            <span style="font-size: 15px">Change
                                                Password</span>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                            <span style="font-size: 15px">{{ __('Logout') }}</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>

                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-area" id="fixheader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="main-menu navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{route('index')}}">
                                <img src="{{asset('frontend/assets/img/logo1.png')}}" alt="Logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="menucontent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                            role="button">Students</a>
                                        <ul class="dropdown-menu">

                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{route('students','Current Student')}}">Current
                                                    Students</a></li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{route('students','Alumni')}}">Alumni</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('seminars')}}">Events</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('jobs')}}">Career</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('blogs')}}">Learn</a></li>


                                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== Header Area End ==-->
    @yield('content')

    <footer id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <!-- Single Widget Start -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-widget-wrap">
                            <div class="widgei-body">
                                <div class="footer-about">
                                    <img src="{{asset('frontend/assets/img/buplogo-resize.png')}}" alt="Logo"
                                        class="img-fluid" />
                                    <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed do eiusmod
                                        tempor incidunt ut et do maga aliqua enim ad minim.</p>
                                    <a href="#">Phone:88-02-8000368</a> <br> <a href="#">Fax: 88-02-8000443</a> <br> <a
                                        href="#">Email: info@alumni.bup.edu.bd</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-widget-wrap">
                            <h4 class="widget-title">Get In Touch</h4>
                            <div class="widgei-body">
                                <p>We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed</p>
                                <div class="newsletter-form">
                                    <form id="cbx-subscribe-form" role="search">
                                        <input type="email" placeholder="Enter Your Email" id="subscribe" required>
                                        <button type="submit"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>
                                <div class="footer-social-icons">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Widget End -->



        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer-bottom-text">
                            <p>© 2020 BUP Alumni Society, All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!--== Footer Area End ==-->

    <!--== Scroll Top ==-->
    <a href="#" class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--== Scroll Top ==-->

    <!-- SITE SCRIPT  -->

    <!-- Jquery JS  -->
    <script src="{{asset('frontend/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>

    <!-- POPPER JS -->
    <script src="{{asset('frontend/assets/vendor/bootstrap/js/popper.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/navbar/bootstrap-4-navbar.js')}}"></script>

    <!--owl-->
    <script src="{{asset('frontend/assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>

    <!--Waypoint-->
    <script src="{{asset('frontend/assets/vendor/waypoint/waypoints.min.js')}}"></script>

    <!--CounterUp-->
    <script src="{{asset('frontend/assets/vendor/counterup/jquery.counterup.min.js')}}"></script>

    <!--isotope-->
    <script src="{{asset('frontend/assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>

    <!--magnific-->
    <script src="{{asset('frontend/assets/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>

    <!--Smooth Scroll-->
    <script src="{{asset('frontend/assets/vendor/smooth-scroll/jquery.smooth-scroll.min.js')}}"></script>

    <!--Jquery Easing-->
    <script src="{{asset('frontend/assets/vendor/jquery-easing/jquery.easing.1.3.min.js')}}"></script>

    <!--Nice Select -->
    <script src="{{asset('frontend/assets/vendor/nice-select/jquery.nice-select.js')}}"></script>

    <!--Jquery Valadation -->
    <script src="{{asset('frontend/assets/vendor/validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/validation/additional-methods.min.js')}}"></script>

    <!--off-canvas js -->
    <script src="{{asset('frontend/assets/vendor/js-offcanvas/js/js-offcanvas.pkgd.min.js')}}"></script>

    <!-- Countdown -->
    <script src="{{asset('frontend/assets/vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>

    <!-- custom js: main custom theme js file  -->
    <script src="{{asset('frontend/assets/js/theme.min.js')}}"></script>

    <!-- custom js: custom js file is added for easy custom js code  -->
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

    <!-- custom js: custom scripts for theme style switcher for demo purpose  -->
    {{-- <script id="switcherhandle" src="{{asset('frontend/assets/switcher/switcher.js')}}"></script> --}}

    @yield('script')
</body>

<!-- Mirrored from codeboxr.net/themedemo/unialumni/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 12:33:32 GMT -->

</html>
