@extends('layouts.base') @section('content') {{-- {{ dd($data) }} --}}
<!-- hs Navigation End -->
<!-- btc tittle Wrapper Start -->
<div class="btc_tittle_main_wrapper">
    <div class="btc_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                <div class="btc_tittle_left_heading">
                    <h1>{{ $data->name_car }}</h1>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
                <div class="btc_tittle_right_heading">
                    <div class="btc_tittle_right_cont_wrapper">
                        <ul>
                            <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Cars</a> <i class="fa fa-angle-right"></i></li>
                            <li>{{ $data->name_car }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- btc tittle Wrapper End -->
<!-- x tittle num Wrapper Start -->
<div class="x_title_num_mian_Wrapper float_left">
    <div class="container">
        <div class="x_title_inner_num_wrapper float_left">
            <div class="x_title_num_heading">
                <h3>Choose a car</h3>
                <p>Complete Your Step</p>
            </div>
            <div class="x_title_num_heading_cont">
                <div class="x_title_num_main_box_wrapper">
                    <div class="x_icon_num">
                        <p>1</p>
                    </div>
                    <h5>Time & place</h5>
                </div>
                <div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper2">
                    <div class="x_icon_num x_icon_num2">
                        <p>2</p>
                    </div>
                    <h5>Car</h5>
                </div>
                <div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
                    <div class="x_icon_num x_icon_num3">
                        <p>3</p>
                    </div>
                    <h5>detail</h5>
                </div>
                <div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
                    <div class="x_icon_num x_icon_num3">
                        <p>4</p>
                    </div>
                    <h5>checkout</h5>
                </div>
                <div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3 x_title_num_main_box_wrapper_last">
                    <div class="x_icon_num x_icon_num3">
                        <p>5</p>
                    </div>
                    <h5>done!</h5>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- {{ dd($data) }} --}}
<!-- x tittle num Wrapper End -->
<!-- x car book sidebar section Wrapper Start -->
<div class="x_car_book_sider_main_Wrapper float_left">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="col-md-12">
                <div class="x_car_detail_main_wrapper float_left">
                    <div class="lr_bc_slider_first_wrapper">
                        <div class="owl-carousel owl-theme">
                            @foreach ($data->photo as $item) {{-- {{ dd($item) }} --}}
                            <div class="item">
                                <div class="lr_bc_slider_img_wrapper">
                                    <img src="{{ asset('') }}images/cars/{{ $item->photo_path }}" alt="fresh_food_img" />
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="x_car_detail_slider_bottom_cont float_left">
                            <div class="card">
                                <div class="card-header">
                                    <div id='map'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="x_car_detail_slider_bottom_cont float_left">
                        <div class="x_car_detail_slider_bottom_cont_left">
                            <h3>{{ $data->name_car }}</h3>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <span>0 Reviews / <span id="rev"></span></span>
                            {{-- <span>/ 3 Km</span> --}}
                        </div>
                        <div class="x_car_detail_slider_bottom_cont_right">
                            <h3>{{ App\Helpers\Format::rupiahFront($data->price_car) }}k</h3>
                            <p>
                                <span>from</span> <br />
                                / day
                            </p>
                        </div>
                        <div class="x_car_detail_slider_bottom_cont_center float_left">
                            <p>
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, rem a quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate cursus a sit
                                amt mauris. Morbi accumsan ipsum velit.
                                <br />
                                <br />
                                This is Photoshop's version of Lorem Ipsum. Proin gravida n vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum tor. This is Photoshop's version of Lorem Ipsum.
                            </p>
                        </div>
                        <div class="x_car_offer_heading x_car_offer_heading_listing float_left x_car_offer_heading_inner_car_names x_car_offer_heading_inner_car_names2">
                            <ul class="">
                                <li>
                                    <a href="#"><i class="fa fa-users"></i> &nbsp;{{ $data->seat_car }} Seats</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-clone"></i> &nbsp;{{ $data->door_car }} Doors</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shield"></i> &nbsp;{{ $data->transmisson_car }} Manual</a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-briefcase"></i> &nbsp;{{ $data->bagage_car }}/ltr Bag Space</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-snowflake-o"></i>&nbsp;2 Air: Yes</a>
                                </li>
                                <li>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current"><i class="fa fa-bars"></i> Others (2)</span>
                                        <ul class="list">
                                            <li class="dpopy_li">
                                                <a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                            </li>
                                            <li class="dpopy_li">
                                                <a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                            </li>
                                            <li class="dpopy_li">
                                                <a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="x_avanticar_btn float_left">
                            <ul>
                                <li>
                                    <a href="{{ url('car/'.Crypt::encrypt($data->id).'/rent') }}">Book Now <i class="fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="x_car_book_left_siderbar_wrapper float_left">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="x_slider_form_main_wrapper x_slider_form_main_wrapper_ccb float_left">
                                <div class="x_slider_form_heading_wrapper x_slider_form_heading_wrapper_carbooking float_left">
                                    <h3>Let’s find your perfect car</h3>
                                </div>
                                {{-- {{ dd($data) }} --}}
                                <form action="{{ url("car/rent") }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="car_id" value="{{ Crypt::encrypt($data->id) }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-sec-header">
                                                <h3>Pick-up Date</h3>
                                                <input type="date" name="date_start" placeholder="Tue 16 Jan 2018" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_select">
                                                <select name="minutes_start" class="myselect" required>
                                                    @for ($i = 1; $i <= 24; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="x_slider_select x_slider_select2">
                                                <select name="second_start" class="myselect" required>
                                                    @for ($i = 1; $i <= 60; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-sec-header">
                                                <h3>Drop-Off Date</h3>
                                                <input type="date" name="date_end" placeholder="Tue 16 Jan 2018" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_select">
                                                <select name="minutes_end" class="myselect" required>
                                                    @for ($i = 1; $i <= 24; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="x_slider_select x_slider_select2">
                                                <select name="second_end" class="myselect" required>
                                                    @for ($i = 1; $i <= 60; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12">
                                            <div class="x_slider_checkbox float_left">
                                                <input type="checkbox" id="c2" name="cb" />
                                                <label for="c2">Driver age is between 30-65 &nbsp;<i class="fa fa-question-circle"></i> </label>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <div class="x_slider_checout_right x_slider_checout_right_carbooking">
                                                <ul>
                                                    <li>
                                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- {{ dd($data) }} --}}
                    </div>
                </div>
            </div>
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog_single_comment_wrapper">
                                    <div class="blog_comment3_wrapper">
                                        <div class="blog_comment1_img">
                                            <img src="{{ asset('') }}assets/images/comment_img3.jpg" alt="comment_img" class="img-responsive img-circle" />
                                        </div>
                                        <div class="blog_comment1_cont">
                                            <h3>
                                                Jhon Doe <i class="fa fa-circle"></i> <span>July 1, 2016</span> &nbsp;&nbsp;<i class="fa fa-star oo"></i>
                                                <i class="fa fa-star oo"></i>
                                                <i class="fa fa-star oo"></i>
                                                <i class="fa fa-star-o oo"></i>
                                                <i class="fa fa-star-o oo"></i>
                                            </h3>
                                            <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="blog_single_comment_wrapper">
                                    <div class="blog_comment3_wrapper">
                                        <div class="blog_comment1_img">
                                            <img src="{{ asset('') }}assets/images/comment_img4.jpg" alt="comment_img" class="img-responsive img-circle" />
                                        </div>
                                        <div class="blog_comment1_cont">
                                            <h3>
                                                Jhon Doe <i class="fa fa-circle"></i> <span>July 1, 2016 </span> &nbsp;&nbsp;<i class="fa fa-star oo"></i>
                                                <i class="fa fa-star oo"></i>
                                                <i class="fa fa-star oo"></i>
                                                <i class="fa fa-star-o oo"></i>
                                                <i class="fa fa-star-o oo"></i>
                                            </h3>
                                            <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="blog_single_comment_wrapper">
                                    <div class="blog_comment3_wrapper">
                                        <div class="blog_comment1_img">
                                            <img src="{{ asset('') }}assets/images/comment_img2.jpg" alt="comment_img" class="img-responsive img-circle" />
                                        </div>
                                        <div class="blog_comment1_cont">
                                            <h3>
                                                Jhon Doe <i class="fa fa-circle"></i> <span>July 1, 2016 </span> &nbsp;&nbsp;<i class="fa fa-star oo"></i>
                                                <i class="fa fa-star oo"></i>
                                                <i class="fa fa-star oo"></i>
                                                <i class="fa fa-star-o oo"></i>
                                                <i class="fa fa-star-o oo"></i>
                                            </h3>
                                            <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="blog_single_comment_wrapper">
                                    <div class="blog_comment3_wrapper">
                                        <div class="blog_comment1_img">
                                            <img src="{{ asset('') }}assets/images/comment_img1.jpg" alt="comment_img" class="img-responsive img-circle" />
                                        </div>
                                        <div class="blog_comment1_cont">
                                            <h3>
                                                Jhon Doe <i class="fa fa-circle"></i> <span>July 1, 2016 </span> &nbsp;&nbsp;<i class="fa fa-star oo"></i>
                                                <i class="fa fa-star oo"></i>
                                                <i class="fa fa-star oo"></i>
                                                <i class="fa fa-star-o oo"></i>
                                                <i class="fa fa-star-o oo"></i>
                                            </h3>
                                            <p>Integer porttitor fringilla vestibulum. Phasellus curs our tinnt nulla, ut mattis augue finibus ac. Vivamus elementum enim ac enim ultrices rhoncus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- {{ dd($data->user->detail->latitude) }} --}}
        </div>
    </div>
</div>
<!-- x car book sidebar section Wrapper End -->
{{-- {{ dd($data->user) }} --}}
@endsection 
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBFIqcyfKaVoWhs4zGxkxqUaLKWl_e1ZgM"></script>
<script>
    $(".owl-carousel").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 3],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 1],
        pagination: false,
        autoPlay: true,
    });
</script>

<script>

    const lat = localStorage.getItem('latitude');
    const long = localStorage.getItem('longitude');


    $.ajax({
        url: '{{ url("api/getDistance") }}',
        type: 'POST',
        data: {
            lator: lat,
            longor: long,
            latde: {{ $data->user->detail->latitude }},
            longde: {{ $data->user->detail->longitude }},
            // _token: '{{ csrf_token() }}'
        },
        success: function (data) {
            $("#rev").append(data)
        }
    })
    function initMap() {
    console.log(lat+' - '+long);

        var pointA = new google.maps.LatLng(lat, long),
            pointB = new google.maps.LatLng({{ $data->user->detail->latitude }},{{ $data->user->detail->longitude }}),
            myOptions = {
            zoom: 20,
            center: pointA
            },
            map = new google.maps.Map(document.getElementById('map'), myOptions),
            // Instantiate a directions service.
            directionsService = new google.maps.DirectionsService,
            directionsDisplay = new google.maps.DirectionsRenderer({
            map: map
            }),
            markerA = new google.maps.Marker({
            position: pointA,
            title: "You",
            label: "A",
            map: map
            }),
            markerB = new google.maps.Marker({
            position: pointB,
            title: "point B",
            label: "B",
            map: map
            });

        // get route from A to B
        calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

        }



    function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
    directionsService.route({
        origin: pointA,
        destination: pointB,
        travelMode: google.maps.TravelMode.DRIVING
    }, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        } else {
        window.alert('Directions request failed due to ' + status);
        }
    });
    }

    initMap();
</script>
@endsection
