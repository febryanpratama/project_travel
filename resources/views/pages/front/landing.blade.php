@extends('layouts.base')

@section('content')
    <!-- hs Slider Start -->
    <div class="slider-area float_left">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <div class="carousel-captions caption-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="content">
                                <p data-animation="animated fadeInUp">Pick Your Car & Drive</p>
                                <h2 data-animation="animated fadeInUp">See how it works for real<br>
                                    <span>Car Hire Start Form $20 Only</span>
                                </h2>
                                <div class="hs_effect_btn">
                                    <ul>
                                        <li data-animation="animated flipInX">
                                        <a rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title' class="test-popup-link">
                                        <img src="{{ asset('assets') }}/images/play.png" alt="olay_icon">&nbsp;&nbsp;Play Video</a>
                                        </li>
                                        <li data-animation="animated flipInX"><a href="#">Book Car<i class="fa fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <div class="carousel-captions caption-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="content">
                                <p data-animation="animated fadeInUp">Pick Your Car & Drive</p>
                                <h2 data-animation="animated fadeInUp">See how it works for real<br>
                                    <span>Car Hire Start Form $20 Only</span>
                                </h2>
                                <div class="hs_effect_btn">
                                    <ul>
                                        <li data-animation="animated flipInX">
                                        <a rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title' class="test-popup-link">
                                        <img src="{{ asset('assets') }}/images/play.png" alt="olay_icon">&nbsp;&nbsp;Play Video</a>
                                        </li>
                                        <li data-animation="animated flipInX"><a href="#">Book Car<i class="fa fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <div class="carousel-captions caption-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="content">
                                <p data-animation="animated fadeInUp">Pick Your Car & Drive</p>
                                <h2 data-animation="animated fadeInUp">See how it works for real<br>
                                    <span>Car Hire Start Form $20 Only</span>
                                </h2>
                                <div class="hs_effect_btn">
                                    <ul>
                                        <li data-animation="animated flipInX">
                                        <a rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title' class="test-popup-link">
                                        <img src="{{ asset('assets') }}/images/play.png" alt="olay_icon">&nbsp;&nbsp;Play Video</a>
                                        </li>
                                        <li data-animation="animated flipInX"><a href="#">Book Car<i class="fa fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span>
                </li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
                </li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span>
                </li>
                </ol>
                <div class="carousel-nevigation">
                <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">	<i class="fa fa-angle-left"></i>
                </a>
                <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i>
                </a>
                </div>
            </div>
        </div>
    </div>
    <!-- hs Slider End -->
    
    <div class="x_responsive_form_wrapper float_left">
        <div class="container">
            <div class="x_slider_form_main_wrapper float_left">
                <div class="x_slider_form_heading_wrapper float_left">
                <h3>Let’s find your perfect car</h3>
                </div>
                <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="x_slider_form_input_wrapper float_left">
                        <h3>Pick-up Location</h3>
                        <input type="text" placeholder="City, Airport, Station, etc.">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="x_slider_form_input_wrapper float_left">
                        <h3>Drop-off Location</h3>
                        <input type="text" placeholder="City, Airport, Station, etc.">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="x_slider_checkbox float_left">
                        <input type="checkbox" id="c5" name="cb">
                        <label for="c5">Driver age is between 30-65 &nbsp;<i class="fa fa-question-circle"></i>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-sec-header">
                        <h3>Pick-up Date</h3>
                        <label class="cal-icon">Pick-up Date
                        <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-sec-header">
                        <h3>Drop-Off Date</h3>
                        <label class="cal-icon">Pick-up Date
                        <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="x_slider_select">
                        <select class="myselect">
                            <option>09</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="x_slider_select x_slider_select2">
                        <select class="myselect">
                            <option>50</option>
                            <option>40</option>
                            <option>03</option>
                            <option>02</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="x_slider_select">
                        <select class="myselect">
                            <option>09</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="x_slider_select x_slider_select2">
                        <select class="myselect">
                            <option>50</option>
                            <option>40</option>
                            <option>03</option>
                            <option>02</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="x_slider_checkbox_bottom float_left">
                        <div class="x_slider_checout_left">
                            <ul>
                            <li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;24/7 Phone Support</li>
                            <li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;No Credit Card Fees</li>
                            <li><i class="fa fa-check-circle"></i>&nbsp;&nbsp;No Amendment Fees</li>
                            </ul>
                        </div>
                        <div class="x_slider_checout_right">
                            <ul>
                            <li><a href="#">search <i class="fa fa-arrow-right"></i></a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- xs Slider bottom title Start -->

    <!-- xs offer car tabs Start -->
    <div class="x_offer_car_main_wrapper float_left padding_tb_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h4>What We Offer</h4>
                    <h3>Choose your Car</h3>
                    <p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
                        <br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,
                    </p>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($cars as $item)
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="x_car_offer_main_boxes_wrapper float_left">
                                <div class="x_car_offer_starts float_left">	<i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="x_car_offer_img float_left">
                                    <img src="{{ asset('') }}images/cars/{{ $item->photo[0]->photo_path }}" class="img-fluid" alt="img">
                                </div>
                                <div class="x_car_offer_price float_left">
                                    <div class="x_car_offer_price_inner">
                                        <h3>{{ App\Helpers\Format::rupiahFront($item->price_car) }}</h3>
                                        <p><span>k</span> 
                                        <br>/ day
                                        </p>
                                    </div>
                                </div>
                                <div class="x_car_offer_heading float_left">
                                    <h2><a href="#">{{ $item->name_car }}</a></h2>
                                    {{-- <p>Extra Small</p> --}}
                                </div>
                                <div class="x_car_offer_heading float_left">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-users"></i>
                                                &nbsp;{{ $item->seat_car }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-clone"></i>
                                                &nbsp;4
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-briefcase"></i>
                                                &nbsp;{{ $item->bagage_car }}
                                            </a>
                                        </li>
                                        <li>
                                            <div class="nice-select" tabindex="0">
                                                <span class="current"><i class="fa fa-bars"></i></span>
                                                <ul class="list">
                                                    <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                    </li>
                                                    <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> {{ $item->transmission_car }} Transmission</a>
                                                    </li>
                                                    <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="x_car_offer_bottom_btn float_left">
                                    <ul>
                                        <li><a href="#">Book now</a>
                                        </li>
                                        <li><a href="{{ url('car/'.Crypt::encrypt($item->id).'/detail') }}">Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- xs offer car tabs End -->

    <!-- btc team Wrapper Start -->
    <div class="btc_team_main_wrapper">
        <div class="btc_team_img_overlay"></div>
        <div class="container">
            <div class="btc_team_left_wrapper">
                <h3>Featured <br>
                Destinations
                </h3>
                <p>Explore a different way to travel. This isot as hop's version of Lorem Ipsum. oin gra nibh vel velit auctor aliquet. nean sollicin, lorem quis.</p>
            </div>
            <div class="btc_team_right_wrapper">
                <div class="btc_team_slider_wrapper">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_team_img_wrapper">
                            <img src="{{ asset('assets') }}/images/t1.jpg" alt="team_img1">
                            <div class="x_team_label_wrapper">
                                <p>40% OFF</p>
                            </div>
                            </div>
                            <div class="btc_team_img_cont_wrapper">
                            <h4><a href="#">Paris, France</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_team_img_wrapper">
                            <img src="{{ asset('assets') }}/images/t2.jpg" alt="team_img1">
                            <div class="x_team_label_wrapper">
                                <p>40% OFF</p>
                            </div>
                            </div>
                            <div class="btc_team_img_cont_wrapper">
                            <h4><a href="#">los Angeles, usa</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_team_img_wrapper">
                            <img src="{{ asset('assets') }}/images/t3.jpg" alt="team_img1">
                            <div class="x_team_label_wrapper">
                                <p>40% OFF</p>
                            </div>
                            </div>
                            <div class="btc_team_img_cont_wrapper">
                            <h4><a href="#">Agra, india</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- btc team Wrapper End -->

    <!-- x counter Wrapper Start -->
    <div class="x_counter_main_wrapper">
        <div class="x_counter_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="x_counter_car_heading_wrapper float_left">
                    <h4>Work Process</h4>
                    <h3>How it works?</h3>
                    <p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
                        <br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,
                    </p>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-airplane-shape"></i> 
                    </div>
                    <h5><span>1.</span> <a href="#">pick destination</a></h5>
                    <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-calendar"></i> 
                    </div>
                    <h5><span>2.</span> <a href="#">select term</a></h5>
                    <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-sedan-car-front"></i> 
                    </div>
                    <h5><span>3.</span> <a href="#">choose a car</a></h5>
                    <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper x_cou_main_box_wrapper_last">
                    <div class="x_icon"> <i class="flaticon-emoticon-square-smiling-face-with-closed-eyes"></i> 
                    </div>
                    <h5><span>4.</span> <a href="#">enjoy the ride</a></h5>
                    <p>Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- x counter Wrapper End -->

    <!-- x booking Wrapper Start -->
    <div class="x_booking_main_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                <div class="x_book_logo_wrapper float_left">
                    <img src="{{ asset('assets') }}/images/white_logo.png" alt="logo">
                </div>
                </div>
                <div class="col-md-6">
                <div class="x_book_logo_heading_wrapper float_left">
                    <h3>Book on AutoRez Now!</h3>
                    <p>The Most User Centric Rental Theme on the Market.</p>
                </div>
                </div>
                <div class="col-md-3">
                <div class="x_book_logo_btn float_left">
                    <ul>
                        <li><a href="#">See All Cars <i class="fa fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- x booking Wrapper End Car -->

    <!-- xs offer car tabs Start Testi -->
    <div class="x_offer_car_main_wrapper float_left padding_tb_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h4>Testimonials</h4>
                    <h3>Top Reviews</h3>
                    <p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
                        <br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,
                    </p>
                </div>
                </div>
                <div class="col-md-12">
                <div class="screenshot">
                    <div class="owl-carousel screen nplr screen-loop">
                        <div>
                            <div class="card  valign-wrapper">
                            <!-- Client's image -->
                            <div class="card-image">
                                <img src="{{ asset('assets') }}/images/client_1.jpg" alt="img">
                            </div>
                            <!-- /Client's image -->
                            <div class="card-content center-align valign">
                                <div class="testi_slide_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <!-- Client's Feedback -->
                                <p>“ I don't always clap, but when I do, it's because of Sella. We can't understand how we've been living without Sella. ”</p>
                                <!-- /Client's Feedback -->
                                <!-- Client's Name -->
                                <p class="card-title">Jonh Smith <span>support manager</span>
                                </p>
                                <!-- /Client's Name -->
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="card  valign-wrapper">
                            <!-- Client's image -->
                            <div class="card-image">
                                <img src="{{ asset('assets') }}/images/client_2.jpg" alt="img">
                            </div>
                            <!-- /Client's image -->
                            <div class="card-content center-align valign">
                                <div class="testi_slide_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <!-- Client's Feedback -->
                                <p>“ I don't always clap, but when I do, it's because of Sella. We can't understand how we've been living without Sella. ”</p>
                                <!-- /Client's Feedback -->
                                <!-- Client's Name -->
                                <p class="card-title">Jonh Smith <span>support manager</span>
                                </p>
                                <!-- /Client's Name -->
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="card  valign-wrapper">
                            <!-- Client's image -->
                            <div class="card-image">
                                <img src="{{ asset('assets') }}/images/client_3.jpg" alt="img">
                            </div>
                            <!-- /Client's image -->
                            <div class="card-content center-align valign">
                                <div class="testi_slide_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <!-- Client's Feedback -->
                                <p>“ I don't always clap, but when I do, it's because of Sella. We can't understand how we've been living without Sella. ”</p>
                                <!-- /Client's Feedback -->
                                <!-- Client's Name -->
                                <p class="card-title">Jonh Smith <span>support manager</span>
                                </p>
                                <!-- /Client's Name -->
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="card  valign-wrapper">
                            <!-- Client's image -->
                            <div class="card-image">
                                <img src="{{ asset('assets') }}/images/client_4.jpg" alt="img">
                            </div>
                            <!-- /Client's image -->
                            <div class="card-content center-align valign">
                                <div class="testi_slide_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <!-- Client's Feedback -->
                                <p>“ I don't always clap, but when I do, it's because of Sella. We can't understand how we've been living without Sella. ”</p>
                                <!-- /Client's Feedback -->
                                <!-- Client's Name -->
                                <p class="card-title">Jonh Smith <span>support manager</span>
                                </p>
                                <!-- /Client's Name -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- btc team Wrapper Start Team -->
    <div class="x_why_main_wrapper">
        <div class="x_why_img_overlay"></div>
        <div class="container">
            <div class="x_why_left_main_wrapper">
                <img src="{{ asset('assets') }}/images/w1.png" alt="car_img">
            </div>
            <div class="x_why_right_main_wrapper">
                <h3>Why Choose Us ?</h3>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, rem a quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate cursus a sit amt mauris. Morbi accumsan ipsum velit.
                <br>
                <br>This is Photoshop's version of Lorem Ipsum. Proin gravida n vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum tor. This is Photoshop's version of Lorem Ipsum.
                </p>
                <ul>
                <li><a href="#">read more <i class="fa fa-arrow-right"></i></a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- btc team Wrapper End -->

    <!-- xs offer car tabs Start Berita -->
    <div class="x_ln_car_main_wrapper float_left padding_tb_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="x_ln_car_heading_wrapper float_left">
                    <h3>Latest cars</h3>
                </div>
                </div>
                <div class="col-md-12">
                <div class="btc_ln_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_ln_img_wrapper float_left">
                                <img src="{{ asset('assets') }}/images/ln1.jpg" alt="team_img1">
                            </div>
                            <div class="btc_ln_img_cont_wrapper float_left">
                                <h4><a href="#">Autoweek in review: Everything you missed Sept. 11-15</a></h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> &nbsp; September 19, 2017</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-user"></i> &nbsp;by Admin</a>
                                    </li>
                                </ul>
                                <p>What's your favorite game? Nam a diam tincidunt, condimentum nisi et, fringilla lectus. Nullam nec lectus..</p>
                                <span><a href="#">Read More &nbsp;<i class="fa fa-angle-double-right"></i></a></span>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_ln_img_wrapper float_left">
                                <img src="{{ asset('assets') }}/images/ln2.jpg" alt="team_img1">
                            </div>
                            <div class="btc_ln_img_cont_wrapper float_left">
                                <h4><a href="#">Rakish Tokyo concept signals hope for Mitsubishi's lineup</a></h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> &nbsp; September 21, 2017</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-user"></i> &nbsp;by Admin</a>
                                    </li>
                                </ul>
                                <p>What's your favorite game? Nam a diam tincidunt, condimentum nisi et, fringilla lectus. Nullam nec lectus..</p>
                                <span><a href="#">Read More &nbsp;<i class="fa fa-angle-double-right"></i></a></span>
                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_ln_img_wrapper float_left">
                                <img src="{{ asset('assets') }}/images/ln3.jpg" alt="team_img1">
                            </div>
                            <div class="btc_ln_img_cont_wrapper float_left">
                                <h4><a href="#">Dinan BMW S2 M4 first drive: Not for everyone's lineup</a></h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> &nbsp; September 23, 2017</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-user"></i> &nbsp;by Admin</a>
                                    </li>
                                </ul>
                                <p>What's your favorite game? Nam a diam tincidunt, condimentum nisi et, fringilla lectus. Nullam nec lectus..</p>
                                <span><a href="#">Read More &nbsp;<i class="fa fa-angle-double-right"></i></a></span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--js Start-->
    
    <!-- xs offer car tabs Start -->
    <div class="x_partner_main_wrapper float_left padding_tb_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h4>Our Cars Partners</h4>
                    <h3>brands in fleet</h3>
                    <p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
                        <br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,
                    </p>
                </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-album-slider">
                    <ul class="album-slider">
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt1.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt2.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt3.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt4.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt5.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt6.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt1.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt2.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt3.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt4.png" alt="img">
                            </figure>
                        </li>
                        <li class="album-slider__item">
                            <figure class="album">
                            <img src="{{ asset('assets') }}/images/prt5.png" alt="img">
                            </figure>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- btc team Wrapper Start -->
    <!-- x news latter Wrapper Start -->
    <div class="x_news_letter_main_wrapper">
        <div class="container">
            <div class="x_news_contact_wrapper">
                <img src="{{ asset('assets') }}/images/nl1.png" alt="news_img">
                <h4>Call Us <br> <span>+1 800 123 4567</span></h4>
            </div>
            <div class="x_news_contact_second_wrapper">
                <h4>Newsletter</h4>
            </div>
            <div class="x_news_contact_search_wrapper">
                <input type="text" placeholder="Email Address">
                <button>read more <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- x news latter Wrapper End -->
    <!-- x footer Wrapper Start -->
    <div class="x_footer_top_main_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="x_footer_top_left float_left">
                    <img src="{{ asset('assets') }}/images/footer_logo.png" alt="logo">
                </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="x_footer_top_right float_left">
                    <div class="x_footer_top_title_box x_footer_top_title_box1">
                        <div class="x_footer_top_title_box_icon_cont">
                            <i class="flaticon-pie-chart"></i>
                            <h3>latest News</h3>
                        </div>
                    </div>
                    <div class="x_footer_top_title_box">
                        <div class="x_footer_top_title_box_icon_cont">
                            <i class="flaticon-phone-call"></i>
                            <h3>Contact our Office</h3>
                        </div>
                    </div>
                    <div class="x_footer_top_title_box">
                        <div class="x_footer_top_title_box_icon_cont x_footer_top_title_box_icon_cont_first">
                            <i class="flaticon-home-page"></i>
                            <h3>Get Appointment</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- x footer Wrapper End -->
@endsection