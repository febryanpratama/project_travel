@extends('layouts.base')

@section('content')
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
						<h5>Car</h5>
					</div>
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num">
							<p>3</p>
						</div>
						<h5>detail</h5>
					</div>
					<div class="x_title_num_main_box_wrapper">
						<div class="x_icon_num">
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
	<!-- x tittle num Wrapper End -->
	<div class="x_car_donr_main_box_wrapper float_left">
		<div class="container">
			<div class="x_car_donr_main_box_wrapper_inner">
				<div class="order-done"> <i class="icon-checked"><img src="images/icon-checked.png" alt=""></i>
					<h4>thank you! Order has been received</h4>
					<h4>Order number: <span>{{ $data }}</span></h4>
					<hr>
					<div class="contect_btn contect_btn_contact">
						<ul>
							<li><a href="#">Print Order <i class="fa fa-print"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection