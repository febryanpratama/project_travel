@extends('layouts.base')

@section('content')
    <!-- btc tittle Wrapper Start -->
	<div class="btc_tittle_main_wrapper">
		<div class="btc_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_left_heading">
						<h1>Booking Accessories</h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
					<div class="btc_tittle_right_heading">
						<div class="btc_tittle_right_cont_wrapper">
							<ul>
								<li><a href="#">Home</a> <i class="fa fa-angle-right"></i>
								</li>
								<li><a href="#">Cars</a> <i class="fa fa-angle-right"></i>
								</li>
								<li>Details</li>
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
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num ">
							<p>2</p>
						</div>
						<h5>Detail</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num2">
							<p>3</p>
						</div>
						<h5>Cart</h5>
					</div>
					<div class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3">
						<div class="x_icon_num x_icon_num3">
							<p>4</p>
						</div>
						<h5>checkout</h5>
					</div>
					<div
						class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3 x_title_num_main_box_wrapper_last">
						<div class="x_icon_num x_icon_num3">
							<p>5</p>
						</div>
						<h5>done!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x tittle num Wrapper End -->
	<!-- x car book sidebar section Wrapper Start -->
	<div class="x_car_book_sider_main_Wrapper float_left">
		<div class="container">
			<div class="row">
				{{-- <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="x_car_book_left_siderbar_wrapper float_left">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<!-- Filter Results -->
								<div class="car-filter accordion x_inner_car_acc_accor">
									<h3>Order Details</h3>
									<hr>
									<!-- Resources -->
									<div class="x_car_access_filer_top_img">
										<img src="images/c2.png" alt="car_img">
										<h3>Dakota gtx</h3>
										<p>$69 (1 day)</p>
									</div>
									<hr>
									<!-- Company -->
									<div class="panel panel-default x_car_inner_acc_acordion_padding">
										<div class="panel-heading">
											<h5 class="panel-title"> <a data-toggle="collapse" href="#collapseTwo"
													class="collapse"> date</a> </h5>
										</div>
										<div id="collapseTwo" class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
													<ul>
														<li>From <span>16-01-2019</span>
														</li>
														<li>To <span>17-01-2019</span>
														</li>
														<li>Duration <span>01 Day</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<!-- Attributes -->
									<div class="panel panel-default x_car_inner_acc_acordion_padding">
										<div class="panel-heading">
											<h5 class="panel-title"> <a data-toggle="collapse" href="#collapseThree"
													class="collapse"> location</a> </h5>
										</div>
										<div id="collapseThree" class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
													<ul>
														<li>Pick-up <span>Barcelona</span>
														</li>
														<li>Drop-off <span>Barcelona</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div
										class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
										<div class="panel-heading">
											<h5 class="panel-title"> <a data-toggle="collapse" href="#collapsefour"
													class="collapse"> Accessories</a> </h5>
										</div>
										<div id="collapsefour" class="collapse show">
											<div class="panel-body">
												<div class="x_car_acc_filter_date">
													<ul>
														<li>1x GPS <span>$19</span>
														</li>
														<li>Insurance <span>$199</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="x_car_acc_filter_bottom_total">
										<ul>
											<li>total <span>$287</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="x_carbooking_right_section_wrapper float_left">
						<div class="row">
                            @foreach ($data as $item)
                            {{-- {{ dd($item) }} --}}
                                <div class="col-md-12">
                                    <div
                                        class="x_car_access_right_price_main_box_wrapper x_car_access_right_price_main_box_wrapper2 float_left">
                                        <div class="x_car_access_right_price_main_box_inner_left_wrapper">
                                            <div class="x_car_access_right_price_img_wrapper">
                                                <img src="{{ asset('images/cars/'.$item->car->photo[0]->photo_path) }}" class="img-thumbnail" alt="g1_img">
                                            </div>
                                            <div class="x_car_access_right_price_img_cont_wrapper">
                                                <h3>{{ $item->car->name_car }}</h3>
                                                <p>{{ $item->car->license_plate }}<br><b>Seat:</b> {{ $item->car->seat_car }} Seat, <b>Transmission:</b> {{ $item->car->transmission_car }}</p>
                                            </div>
                                        </div>
                                        <div class="x_car_access_right_price_main_box_inner_right_wrapper">
                                            <div class="x_car_acc_price_dollar_wrapper">
                                                <h3>{{ App\Helpers\Format::rupiahFront($item->car->price_car)*App\Helpers\Format::days($item->start_date, $item->end_date) }}k</h3>
                                                <p>/ {{ App\Helpers\Format::days($item->start_date, $item->end_date) }} days</p>
                                            </div>
                                            <div class="x_car_acc_price_dollar_count_wrapper">
                                                <a href="{{ url('checkout/'.encrypt($item->id)) }}" class="btn btn-primary mt-3">Choose</a>
                                                {{-- <div class="quantity">
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
							<div class="col-md-12">
								<div class="x_car_acc_bottom_button float_left">
									<p><i class="fa fa-info-circle"></i> &nbsp;Phasellus ornare, ante vitae consectetuer
										consequat, purus sapien ultricies dolor.</p>
									<ul>
										<li><a href="#">Proceed to checkout <i class="fa fa-arrow-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- x car book sidebar section Wrapper End -->
@endsection