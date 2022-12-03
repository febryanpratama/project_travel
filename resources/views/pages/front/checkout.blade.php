@extends('layouts.base')
@section('content')
<!-- btc tittle Wrapper Start -->
<div class="btc_tittle_main_wrapper">
   <div class="btc_tittle_img_overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
            <div class="btc_tittle_left_heading">
               <h1>Checkout</h1>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 full_width">
            <div class="btc_tittle_right_heading">
               <div class="btc_tittle_right_cont_wrapper">
                  <ul>
                     <li>
                        <a href="#">Home</a> <i class="fa fa-angle-right"></i>
                     </li>
                     <li>
                        <a href="#">Cars</a> <i class="fa fa-angle-right"></i>
                     </li>
                     <li>Checkout</li>
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
               <div class="x_icon_num">
                  <p>2</p>
               </div>
               <h5>Detail</h5>
            </div>
            <div class="x_title_num_main_box_wrapper">
               <div class="x_icon_num">
                  <p>3</p>
               </div>
               <h5>Cart</h5>
            </div>
            <div
               class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3"
               >
               <div class="x_icon_num x_icon_num3">
                  <p>4</p>
               </div>
               <h5>checkout</h5>
            </div>
            <div
               class="x_title_num_main_box_wrapper x_title_num_main_box_wrapper3 x_title_num_main_box_wrapper_last"
               >
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
         <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="x_car_book_left_siderbar_wrapper float_left">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <!-- Filter Results -->
                     <div class="car-filter accordion x_inner_car_acc_accor">
                        <h3>Order Details</h3>
                        <hr>
                        <!-- Resources -->
                        <div class="x_car_access_filer_top_img">
                           <img src="{{ asset('images/cars/'.$data->car->photo[0]->photo_path) }}" alt="car_img" class="img-fluid">
                           <h3>{{ $data->car->name_car }}</h3>
                           <p>{{ App\Helpers\Format::rupiahFront($data->car->price_car) }}k (1 day)</p>
                        </div>
                        <hr>
                        <!-- Company -->
                        <!-- Attributes -->
                        <div class="panel panel-default x_car_inner_acc_acordion_padding">
                           <div class="collapse show">
                              <div class="panel-body">
                                 <div class="x_car_acc_filter_date">
                                    <table class="table">
                                       <thead>
                                          <tr class="text-center">
                                             <th scope="col">QTY</th>
                                             <th scope="col">Rate</th>
                                             <th scope="col">Subtotal</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="text-center">
                                             <td>{{ App\Helpers\Format::days($data->start_date, $data->end_date) }} Day</td>
                                             <td>{{ App\Helpers\Format::rupiahFront($data->car->price_car) }}k</td>
                                             <td>{{ App\Helpers\Format::rupiahFront($data->car->price_car)*App\Helpers\Format::days($data->start_date, $data->end_date) }}k</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
                           <div class="panel-heading car_checkout_caret">
                              <h5 class="panel-title">
                                 <a href="#"> Pick-up Date &amp; place</a>
                              </h5>
                           </div>
                           <div class="collapse show">
                              <div class="panel-body">
                                 <div class="x_car_acc_filter_date">
                                    <ul>
                                       <li>{{ Carbon\Carbon::parse($data->start_date)->format('d M Y') }} @ {{ Carbon\Carbon::parse($data->start_date)->format('H:i') }}</li>
                                       <li>Place </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
                           <div class="panel-heading car_checkout_caret">
                              <h5 class="panel-title">
                                 <a href="#"> Drop-Off Date &amp; place</a>
                              </h5>
                           </div>
                           <div class="collapse show">
                              <div class="panel-body">
                                 <div class="x_car_acc_filter_date">
                                    <ul>
                                       <li>{{ Carbon\Carbon::parse($data->end_date)->format('d M Y') }} @ {{ Carbon\Carbon::parse($data->end_date)->format('H:i') }}</li>
                                       <li>Place </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        {{-- <div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
                           <div class="panel-heading car_checkout_caret">
                              <h5 class="panel-title">
                                 <a href="#"> Accessories</a>
                              </h5>
                           </div>
                           <div class="collapse show">
                              <div class="panel-body">
                                 <div class="x_car_acc_filter_date">
                                    <ul>
                                       <li>1x GPS <span>$19</span></li>
                                       <li>Insurance <span>$199</span></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
                           <div class="panel-heading car_checkout_caret">
                              <h5 class="panel-title">
                                 <a href="#"> Taxes &amp; Fees</a>
                              </h5>
                           </div>
                           <div class="collapse show">
                              <div class="panel-body">
                                 <div class="x_car_acc_filter_date">
                                    <ul>
                                       <li>Sales (1%) <span>$1</span></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="panel panel-default x_car_inner_acc_acordion_padding x_car_inner_acc_acordion_padding_last">
                           <div class="collapse show">
                              <div class="panel-body">
                                 <div class="x_car_acc_filter_date">
                                    <input type="text" placeholder="Coupon Code">
                                    <button type="submit">
                                    <i class="fa fa-arrow-right"></i>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div> --}}
                        <div class="x_car_acc_filter_bottom_total">
                           <ul>
                              <li>Name <span id="name"> </span></li>
                           </ul>
                           <ul class="mt-2">
                              <li>total <span id="total"> Rp. {{ number_format($data->car->price_car*App\Helpers\Format::days($data->start_date, $data->end_date),'0') }}</span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="x_carbooking_right_section_wrapper float_left">
               <div class="row">
                  <div class="col-md-12">
                     <div class="x_car_checkout_right_main_box_wrapper float_left">
                        <div class="car-filter order-billing margin-top-0">
                           <div class="heading-block text-left margin-bottom-0">
                              <h4>Spesification Details</h4>
                              {{-- <div class="pull-right checkout_login_btn">
                                 <ul>
                                    <li>
                                       <a href="#">Login <i class="fa fa-arrow-right"></i></a>
                                    </li>
                                 </ul>
                                 <p class="retrn">Returning customer?</p>
                              </div> --}}
                           </div>
                           <hr>
                           <form class="billing-form" id="myForm" method="POST" action="{{ url('checkout') }}">
                              @csrf
                              <input type="hidden" name="cart_id" value="{{ $data->id }}">
                              <input type="hidden" name="total_price" value="" id="total_price">
                              <input type="hidden" name="fee" value="" id="fee">
                              <ul class="list-unstyled row">
                                 <li class="col-md-6">
                                    <label>Category Car *
                                    <input type="text" placeholder="" value="{{ $data->car->categories->category_name }}" readonly class="form-control">
                                    </label>
                                 </li>
                                 <li class="col-md-6">
                                    <label>Brand Car *
                                    <input type="text" placeholder="" value="{{ $data->car->brand_car }}" readonly class="form-control">
                                    </label>
                                 </li>
                                 <li class="col-md-6">
                                    <label>License Plate *
                                    <input type="text" placeholder="" value="{{ $data->car->license_plate }}" readonly class="form-control">
                                    </label>
                                 </li>
                                 <li class="col-md-6">
                                    <label>Year Car *
                                    <input type="text" placeholder="" value="{{ $data->car->year_car }}" readonly class="form-control">
                                    </label>
                                 </li>
                                 <li class="col-md-6">
                                    <label>Seat Car *
                                    <input type="text" placeholder="" value="{{ $data->car->seat_car }} Seat" readonly class="form-control">
                                    </label>
                                 </li>
                                 <li class="col-md-6">
                                    <label>Door Car *
                                    <input type="text" placeholder="" value="{{ $data->car->door_car }} Door" readonly class="form-control">
                                    </label>
                                 </li>
                                 <li class="col-md-6">
                                    <label>Baggage Car *
                                    <input type="text" placeholder=""  value="{{ $data->car->bagage_car }} ltr" readonly class="form-control">
                                    </label>
                                 </li>
                              </ul>
                              <hr>
                              <div class="payme-opton">
                                 <div class="heading-block text-left margin-bottom-30">
                                    <h4>Payment</h4>
                                 </div>
                                 <div class="radio">
                                    <input type="radio" name="channel_pembayaran" class="check" id="cod" value="COD" checked="">
                                    <label for="cod">Payment on Arrival</label>
                                 </div>
                                 @foreach ($channel as $item)
                                    <div class="radio">
                                       <input type="radio" name="channel_pembayaran" class="check" id="{{ $item->code }}" value="{{ $item->code }}">
                                       <label for="{{ $item->code }}">{{ $item->name }}</label>
                                    </div>
                                 @endforeach
                              </div>
                              <hr>
                              <div class="checkbox car_checkout_chekbox">
                                 <input type="checkbox" id="c3" name="cb">
                                 <label for="c3">I have Read and Accept Terms &amp; Conditions *</label>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="contect_btn contect_btn_contact">
                        <div class="col-md-12 mt-1">
                           <ul>
                              <li>
                                 <button type="submit" form="myForm" class="btn btn-primary">Place An Order <i class="fa fa-arrow-right"></i></button>
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
</div>
<!-- x car book sidebar section Wrapper End -->
@endsection

@section('script')
    <script>
      $('.check').on('change', function(){
         if($(this).is(':checked')){
            let code = $(this).val();
            let total = {{ $data->car->price_car*App\Helpers\Format::days($data->start_date, $data->end_date) }}

            $.ajax({
               url: "{{ url('api/calculator') }}",
               type: "POST",
               data: {
                  "_token": "{{ csrf_token() }}",
                  "code": code,
                  "amount": total
               },
               success: function(response){

                  // Response
                  if(code != 'COD'){
                     if(response.status == true){
                        let totalamount = (total + response.data[0].fee.flat)
                        let format = (totalamount).toLocaleString('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 })
                        $('#name').html(response.data[0].code);
                        $('#total').html(format);
                        $('#total_price').val(totalamount);
                        $('#code').val(response.data[0].code);
                        $('#fee').val(response.data[0].fee.flat);
                     }else{
                        alert("Error Calculator")
                     }
                  }else{
                     let format = (total).toLocaleString('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 })
                     $('#name').html('COD');
                     $('#total').html(format);
                     $('#code').val('COD');
                     $('#total_price').val(total);
                  }

               }
            })
         }
      })
    </script>
@endsection