<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from rstheme.com/products/html/advokat/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Oct 2020 17:42:20 GMT -->

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>N. JAHAN LPC</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('contents/website')}}/images/fav.png">
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/off-canvas.css">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/fonts/linea-fonts.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/fonts/flaticon.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/inc/custom-slider/css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/inc/custom-slider/css/preview.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/rsmenu-main.css">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/rsmenu-transitions.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/css/custom.css">
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="defult-home">
    @include('include.flash')

    @if (Request::path() == '/')
        <!-- Preloader area start here   -->
        <div id="loading" class="image-preloader">
            <div class="loader"><img src="{{ asset(''.$basic_information->logo) }}" alt="Logo"></div>
        </div>
        <!--End preloader here -->
    @endif


    <!--Full width header Start-->
    <div class="full-width-header header-transparent">
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-md">
            <div class="container-fluid">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-6 col-md-7 col-sm-12">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="fa fa-envelope-o"></i><a href="#">{{ $basic_information->email_1 }}</a></li>
                                <li><i class="fa fa-phone"></i><a href="#">{{ $basic_information->mobile_no_1 }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12">
                        <div class="toolbar-sl-share">
                            <ul>
                                {{-- <li><a href="{{ $basic_information->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $basic_information->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $basic_information->pinterest }}"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="{{ $basic_information->linkedin }}"><i class="fa fa-linkedin"></i></a></li> --}}
                                <li class="get-btn"><a href="/contact#free-consultation">Free Consultation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo-area">
                                <a class="light" href="/"><img src="{{asset(''.$basic_information->logo)}}" alt="logo"></a>
                                <a class="dark" href="/"><img src="{{asset(''.$basic_information->logo)}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu mega-rs menu-item-has-children {{ Request::path() == '/'? 'current-menu-item':'' }} ">
                                                <a href="/">Home </a>
                                            </li>
                                            <li class="{{ Request::path() == 'about'? 'current-menu-item':'' }}"><a href="/about">About us</a></li>
                                            <li class="{{ Request::path() == 'service'? 'current-menu-item':'' }}"><a href="/service">Services</a></li>
                                            <li class="{{ Request::path() == 'team-lead'? 'current-menu-item':'' }}"><a href="/team-lead">Team lead</a></li>
                                            <li class="{{ Request::path() == 'our-privilege'? 'current-menu-item':'' }}"><a href="/our-privilege">Our Privilege</a></li>
                                            <li class="{{ Request::path() == 'contact'? 'current-menu-item':'' }}"><a href="/contact">Contact us</a></li>
                                        </ul>
                                        <!-- //.nav-menu -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->


    @yield('content')



    <!-- Footer Start -->
    <footer id="rs-footer " class="rs-footer ">
        <div class="footer-top ">
            <div class="container ">
                <div class="row ">
                    <div class="col-lg-3 col-md-12 col-sm-12 footer-widget-one md-mb-50 ">
                        <div class="about-widget ">
                            <a href="index.html ">
                                <img src="{{asset(''.$basic_information->logo)}}" alt="Footer Logo ">
                            </a>
                            <div class="footer-info ">
                                <p>
                                    {{ $basic_information->footer_short_about }}
                                </p>
                            </div>
                            {{-- <ul class="social-links ">
                                <li><a href="{{ $basic_information->facebook }} "><i class="fa fa-facebook "></i></a></li>
                                <li><a href="{{ $basic_information->twitter }}  "><i class="fa fa-twitter "></i></a></li>
                                <li><a href="{{ $basic_information->pinterest }} "><i class="fa fa-pinterest-p "></i></a></li>
                                <li><a href="{{ $basic_information->linkedin }}  "><i class="fa fa-linkedin "></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12 footer-widget-two md-mb-50 ">
                        <h5 class="footer-title ">Quick Contact Info</h5>
                        <div class="desc mb-24 ">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</div>
                        <ul class="footer-address ">
                            <li><i class="fa fa-globe "></i><span>{{ $basic_information->address }} </span></li>
                            <li><i class="fa fa-phone "></i><a href="# ">{{ $basic_information->mobile_no_1 }}  (office), {{ $basic_information->mobile_no_2 }}  (cell) </a></li>
                            <li><i class="fa fa-envelope-o "></i><a href="# ">{{ $basic_information->email_2 }} </a></li>
                            <li><i class="fa fa-clock-o "></i>{{ $basic_information->work_time }} </li>
                        </ul>
                    </div>
                    {{-- <div class="col-lg-3 col-md-12 col-sm-12 footer-widget-four ">
                        <h5 class="footer-title ">Subscribe to Our Newsletter</h5>
                        <p class="desc ">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                        <p class="desc ">Righteous indignation and dislike men who are so the charms.</p>
                        <form class="footer-newsletter " action="{{ route('website_subscriber_submit') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email Address " required>
                            <button type="submit"><i class="fa fa-paper-plane "></i></button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="footer-bottom ">
            <div class="container ">
                @php
                    $basic = \App\BasicInformation::first();
                @endphp
                <div class="copyright text-center ">
                    <p>{{ $basic->copy_right }}</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up "></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true " class="modal fade search-modal " role="dialog " tabindex="-1 ">
        <button type="button " class="close " data-dismiss="modal " aria-label="Close ">
            <span class="flaticon-cross "></span>
        </button>
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content ">
                <div class="search-block clearfix ">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group ">
                            <input class="form-control " placeholder="Search Here... " type="email" name="email">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="{{asset('contents/website')}}/js/modernizr-2.8.3.min.js "></script>
    <!-- jquery latest version -->
    <script src="{{asset('contents/website')}}/js/jquery.min.js "></script>
    <!-- bootstrap js -->
    <script src="{{asset('contents/website')}}/js/bootstrap.min.js "></script>
    <!-- Menu js -->
    <script src="{{asset('contents/website')}}/js/rsmenu-main.js "></script>
    <!-- op nav js -->
    <script src="{{asset('contents/website')}}/js/jquery.nav.js "></script>
    <!-- owl.carousel js -->
    <script src="{{asset('contents/website')}}/js/owl.carousel.min.js "></script>
    <!-- Slick js -->
    <script src="{{asset('contents/website')}}/js/slick.min.js "></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{asset('contents/website')}}/js/isotope.pkgd.min.js "></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{asset('contents/website')}}/js/imagesloaded.pkgd.min.js "></script>
    <!-- wow js -->
    <script src="{{asset('contents/website')}}/js/wow.min.js "></script>
    <!-- Skill bar js -->
    <script src="{{asset('contents/website')}}/js/skill.bars.jquery.js "></script>
    <script src="{{asset('contents/website')}}/js/jquery.counterup.min.js "></script>
    <!-- counter top js -->
    <script src="{{asset('contents/website')}}/js/waypoints.min.js "></script>
    <!-- video js -->
    <script src="{{asset('contents/website')}}/js/jquery.mb.YTPlayer.min.js "></script>
    <!-- magnific popup js -->
    <script src="{{asset('contents/website')}}/js/jquery.magnific-popup.min.js "></script>
    <!-- Nivo slider js -->
    <script src="{{asset('contents/website')}}/inc/custom-slider/js/jquery.nivo.slider.js "></script>
    <!-- plugins js -->
    <script src="{{asset('contents/website')}}/js/plugins.js "></script>
    <!-- contact form js -->
    <script src="{{asset('contents/website')}}/js/contact.form.js "></script>
    <!-- main js -->
    <script src="{{asset('contents/website')}}/js/main.js "></script>
</body>

</html>

</html>
