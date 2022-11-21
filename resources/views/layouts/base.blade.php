<!DOCTYPE html>

<html lang="zxx">
    <!--[endif]-->
    <!-- Mirrored from xdemos.space/xpedia/index_II.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2022 15:40:11 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8" />
        <title>Xpedia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description" content="Xpedia" />
        <meta name="keywords" content="Xpedia" />
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320" />
        <!--Template style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/xpedia_II.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/xpedia.css" />
        <!--favicon-->
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/fevicon.png" />

        <!-- Required Core Stylesheet -->
        {{--
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        --}}

        <!--Template style -->
        <!--favicon-->
        {{--
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/fevicon.png" />
        --}} {{--
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" crossorigin="" />
        --}}
        <style>
            .text-center {
                text-align: center;
            }
            #map {
                width: "100%";
                height: 400px;
            }
        </style>
    </head>
    <body>
        <!-- preloader Start -->
        <div id="preloader">
            <div id="status">
                <img src="{{ asset('assets') }}/images/loader.gif" id="preloader_image" alt="loader" />
            </div>
        </div>
        <div class="serach-header">
            <div class="searchbox">
                <button class="close">×</button>
                <form>
                    <input type="search" placeholder="Search …" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <!-- x top header_wrapper Start -->
        @include('layouts._partials.top_header')
        <!-- x top header_wrapper End -->
        <!-- hs Navigation Start -->
        @include('layouts._partials.main_header')
        <!-- hs Navigation End -->

        @yield('content')
        <!-- x footer Wrapper Start -->
        <div class="x_footer_bottom_main_wrapper float_left">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="x_footer_bottom_box_wrapper float_left">
                            <h3>About Us</h3>
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span>
                                <a href="#">Read More &nbsp;<i class="fa fa-angle-double-right"></i></a>
                            </span>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="x_footer_bottom_box_wrapper_second float_left">
                            <h3>Information</h3>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; About</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; Service</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; Become a Driver</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; Best Price Guarantee</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; Privacy & Cookies Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="x_footer_bottom_box_wrapper_second float_left">
                            <h3>Customer Support</h3>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; FAQ</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; Payment Option</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; Booking Tips</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; How it words ?</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i> &nbsp; Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="x_footer_bottom_box_wrapper_third float_left">
                            <h3>Have Questions?</h3>
                            <div class="x_footer_bottom_icon_section float_left">
                                <div class="x_footer_bottom_icon"><i class="flaticon-phone-call"></i></div>
                                <div class="x_footer_bottom_icon_cont">
                                    <h4>Toll Free caling in world</h4>
                                    <p>808 - 111 - 9999</p>
                                </div>
                            </div>
                            <div class="x_footer_bottom_icon_section x_footer_bottom_icon_section2 float_left">
                                <div class="x_footer_bottom_icon x_footer_bottom_icon2"><i class="flaticon-mail-send"></i></div>
                                <div class="x_footer_bottom_icon_cont">
                                    <h4>Email Us</h4>
                                    <p><a href="#">listing@example.com</a></p>
                                </div>
                            </div>
                            <div class="x_footer_bottom_icon_section x_footer_bottom_icon_section2 float_left">
                                <div class="x_footer_bottom_icon x_footer_bottom_icon3"><i class="fa fa-map-marker"></i></div>
                                <div class="x_footer_bottom_icon_cont x_footer_bottom_icon_cont2">
                                    <h4><a href="#">View On Map</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="x_copyr_main_wrapper float_left">
            <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
            <div class="container">
                <p>Copyright © 2018 Expedia. All rights reserved.</p>
            </div>
        </div>
        <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
        <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('assets') }}/js/modernizr.js"></script>
        <script src="{{ asset('assets') }}/js/select2.min.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.menu-aim.js"></script>
        <script src="{{ asset('assets') }}/js/jquery-ui.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.nice-select.min.js"></script>
        <script src="{{ asset('assets') }}/js/owl.carousel.js"></script>
        <script src="{{ asset('assets') }}/js/jquery.magnific-popup.js"></script>
        {{--
        --}}
        <script src="{{ asset('assets') }}/js/jquery.bxslider.min.js"></script>
        <script src="{{ asset('assets') }}/js/xpedia_II.js"></script>

        <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
        @include('layouts._partials.nav-script') 
        @yield('script')

        {{-- <script>
            $(document).ready(function(){
                console.log(localStorage.getItem('latitude'))
            })
        </script> --}}
    </body>
    <!-- Mirrored from xdemos.space/xpedia/index_II.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2022 15:40:14 GMT -->
</html>
