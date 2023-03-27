<?php

namespace App\Services;

use App\Helpers\Format;
use App\Models\Car;
use App\Models\Cart;
use App\Models\DetailUsers;
use App\Models\Rental;
use App\Models\Transaction;
use App\Models\User;
use App\Services\ApiService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FrontService
{

    protected $api;
    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }

    public function index()
    {
        // $response = $this->api->get(['segment_1' => 'car']);

        $data = Car::with('user', 'photo', 'categories')->where('is_deleted', null)->get();

        // dd($data);
        $response = (object)[
            'status' => true,
            'message' => 'Your request has been processed successfully',
            'data' => $data
        ];

        return $response;
    }

    public function storeSignup($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'repassword' => 'required|same:password',
            'firstname' => 'required',
            'lastname' => 'required',
            'identity_number' => 'required|numeric|unique:detail_users',
            'dob' => 'required|date',
            'pob' => 'required',
            'state' => 'required|numeric',
            'city' => 'required|numeric',
            'district' => 'required|numeric',
            'villages' => 'required|numeric',
            'address' => 'required',
            'phone_number_1' => 'required|numeric',
            'photo_user' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
                'data' => null
            ];
        }

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->assignRole('User');

            if ($data['photo_user']) {
                # code...
                $imageName = time() . '.' . $data['photo_user']->extension();
                $data['photo_user']->move(public_path('images/user'), $imageName);
            }
            DetailUsers::create([
                'user_id' => $user->id,
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'identity_number' => $data['identity_number'],
                'dob' => $data['dob'],
                'pob' => $data['pob'],
                'state' => $data['state'],
                'city' => $data['city'],
                'district' => $data['district'],
                'villages' => $data['villages'],
                'address' => $data['address'],
                'phone_number_1' => $data['phone_number_1'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'path_user' => $imageName,
            ]);

            DB::commit();

            return [
                'status' => true,
                'message' => 'Your request has been processed successfully',
                'data' => null
            ];
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            return [
                'status' => false,
                'message' => $th->getMessage(),
                'data' => null
            ];
        }
    }

    public function detailCar($car_id)
    {
        $data = Car::with('user', 'photo', 'categories', 'user.detail', 'rating', 'rating.user')->where('id', decrypt($car_id))->first();

        // dd($data);
        return (object)[
            'status' => true,
            // 'message' => 'Your request has beenp processed successfully',
            'data' => $data
        ];
    }

    public function storeRentCar($data)
    {
        // 
        // dd($data);
        $validator = Validator::make($data, [
            'car_id' => 'required',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'minutes_start' => 'required|numeric',
            'minutes_end' => 'required|numeric',
            'second_start' => 'required|numeric',
            'second_end' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            # code...
            // dd($validator->errors()->first());
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
                'data' => null
            ];
        }

        $car = Car::where('id', decrypt($data['car_id']))->first();

        if (!$car) {
            // dd($car);
            return [
                'status' => false,
                'message' => 'Car not found',
                'data' => null
            ];
        }

        DB::beginTransaction();

        try {
            $arr1 = strlen($data['minutes_start']) == 1 ? '0' . $data['minutes_start'] : $data['minutes_start'];
            $arr2 = strlen($data['second_start']) == 1 ? '0' . $data['second_start'] : $data['second_start'];

            $arr3 = strlen($data['minutes_end']) == 1 ? '0' . $data['minutes_end'] : $data['minutes_end'];
            $arr4 = strlen($data['second_end']) == 1 ? '0' . $data['second_end'] : $data['second_end'];

            $start_date = $data['date_start'] . ' ' . $arr1 . ':' . $arr2 . ':00';
            $end_date = $data['date_end'] . ' ' . $arr3 . ':' . $arr4 . ':00';


            // dd($car);
            Cart::create([
                'owner_id' => $car->user_id,
                'borrower_id' => Auth::user()->id,
                'car_id'  => $car->id,
                'start_date' => $start_date,
                'end_date' => $end_date,
            ]);

            DB::commit();

            return [
                'status' => true,
                'message' => 'Your request has been processed successfully',
                'data' => [
                    'car_id' => $data['car_id'],
                ]
            ];
        } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
            DB::rollBack();
            return [
                'status' => false,
                'message' => $th->getMessage(),
                'data' => [
                    'car_id' => $data['car_id']
                ]
            ];
        }
    }

    public function cart()
    {
        $data = Cart::with('car', 'car.user', 'car.photo', 'car.categories', 'car.user.detail')->where('borrower_id', Auth::user()->id)->where('status', 'Unpaid')->get();

        // dd($data);

        return (object)[
            'status' => true,
            'message' => 'Your request has beenp processed successfully',
            'data' => $data
        ];
    }

    public function getChannel($cart_id)
    {
        // hit payment api
        $api = $this->api->apiPayment('merchant/payment-channel/', []);

        // Get Data Cart id
        $data = Cart::with('car', 'car.user', 'car.photo', 'car.categories', 'car.user.detail')->where('id', decrypt($cart_id))->first();

        // dd($data);

        // dd($api->data);
        return [
            'status' => true,
            'message' => 'Your request has been processed successfully',
            'data' => [
                'cart_id' => $cart_id,
                'payment_channel' => $api->data,
                'cart' => $data
            ]
        ];
    }
    public function requestPayment($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'cart_id' => 'required|exists:carts,id',
            'total_price' => 'required',
            'fee' => 'required',
            'channel_pembayaran' => 'required',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
                'data' => null
            ];
        }
        DB::beginTransaction();

        try {
            $kd_transaction = 'TRX-' . date('Ymd') . '-' . substr(strtotime(date('Y-m-d H:i:s')), 6, 10);

            $privateKey   = env('PRIVAT_KEY_SANDBOX');
            $merchantCode = 'T8584';
            $merchantRef  = $kd_transaction;
            $amount       = $data['total_price'] - $data['fee'];

            $signature = hash_hmac('sha256', $merchantCode . $merchantRef . $amount, $privateKey);

            $cart = Cart::with('car', 'borrower', 'borrower.detail')->where('id', $data['cart_id'])->first();

            // dd($cart);

            $payload = [
                'method' => $data['channel_pembayaran'],
                'merchant_ref' => $kd_transaction,
                'amount' => $data['total_price'] - $data['fee'],
                'customer_name' => $cart->borrower->detail->firstname,
                'customer_email' => $cart->borrower->email,
                'customer_phone' => $cart->borrower->detail->phone_number_1,
                'order_items' => [
                    [
                        'sku' => 'SID-' . $cart->car->id,
                        'name' => $cart->car->name_car,
                        'price' => $cart->car->price_car,
                        'quantity' => Format::days($cart->start_date, $cart->end_date),
                    ]
                ],
                'return_url'   => 'https://travel.febryancaesarpratama.com/redirect',
                'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
                'signature'    => $signature
            ];

            $api = $this->api->transaction('transaction/create', ['params' => $payload]);

            if ($api->success) {
                $transaction = Transaction::create([
                    'user_id' => $cart->borrower_id,
                    'car_id' => $cart->car_id,
                    'cart_id' => $cart->id,
                    'reference' => $api->data->reference,
                    'merchant_ref' => $api->data->merchant_ref,
                    'payment_method' => $api->data->payment_method,
                    'payment_name' => $api->data->payment_name,
                    'customer_name' => $api->data->customer_name,
                    'customer_email' => $api->data->customer_email,
                    'customer_phone' => $api->data->customer_phone,
                    'callback_url' => $api->data->callback_url,
                    'return_url' => $api->data->return_url,
                    'fee_merchant' => $api->data->fee_merchant,
                    'fee_customer' => $api->data->fee_customer,
                    'total_fee' => $api->data->total_fee,
                    'amount_received' => $api->data->amount_received,
                    'pay_code' => $api->data->pay_code,
                    'pay_url' => $api->data->pay_url,
                    'checkout_url' => $api->data->checkout_url,
                    'status' => $api->data->status,
                    'expired_time' => $api->data->expired_time,
                ]);

                // dd($transaction);

                Cart::where('id', $cart->id)->update([
                    'status' => 'Paid'
                ]);

                Rental::create([
                    'transaction_id' => $transaction->id,
                    'car_id' => $cart->car_id,
                    'borrower_id' => $cart->borrower_id,
                    'rental_status' => 'On Take'
                ]);

                DB::commit();

                return [
                    'status' => true,
                    'message' => 'Your request has been processed successfully',
                    'data' => [
                        'cart_id' => $cart->id,
                        'transaction' => $transaction
                    ]
                ];
            } else {
                // 

            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }


    public function responsePayment($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'tripay_reference' => 'required|exists:transactions,reference',
            'tripay_merchant_ref' => 'required|exists:transactions,merchant_ref',
            'tripay_status' => 'required|in:UNPAID,PAID,REFUND,EXPIRED,FAILED',
            'tripay_signature' => 'required',
        ]);

        if ($validator->fails()) {
            abort(401);
        }
        # code...

        Transaction::where('reference', $data['tripay_reference'])->where('merchant_ref', $data['tripay_merchant_ref'])->update([
            'status' => $data['tripay_status']
        ]);

        return [
            'status' => true,
            'message' => 'Your request has been processed successfully',
            'data' => $data['tripay_merchant_ref']
        ];
    }

    static function storeSignupCompany($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'latitude' => 'required',
            'longitude' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|same:repassword',
            'identity_number' => 'required',
            'state' => 'required',
            'city' => 'required',
            'district' => 'required',
            'villages' => 'required',
            'address' => 'required',
            'phone_number_1' => 'required',
            'photo_user' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            // dd("ok");
            dd($validator->errors()->first());
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
                'data' => null
            ];
        }

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
                'data' => null
            ];
        }

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->assignRole('Tenant');

            if ($data['photo_user']) {
                # code...
                $imageName = time() . '.' . $data['photo_user']->extension();
                $data['photo_user']->move(public_path('images/user'), $imageName);
            }


            DetailUsers::create([
                'user_id' => $user->id,
                'firstname' => $data['name'],
                'lastname' => null,
                'identity_number' => $data['identity_number'],
                'state' => $data['state'],
                'city' => $data['city'],
                'district' => $data['district'],
                'villages' => $data['villages'],
                'address' => $data['address'],
                'phone_number_1' => $data['phone_number_1'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'path_user' => $imageName,
            ]);

            DB::commit();

            // dd("ok");
            return [
                'status' => true,
                'message' => 'Your request has been processed successfully',
                'data' => null
            ];
        } catch (\Throwable $th) {
            //throw $th;

            // dd($th->getMessage() . "ok");
            DB::rollback();
            return [
                'status' => false,
                'message' => $th->getMessage(),
                'data' => null
            ];
        }
    }

    static function getCar($data)
    {
        // dd($data['latitude']);
        $latitude = $data['latitude'];
        $longitude = $data['longitude'];
        $radius = 10;
        // $data = DetailUsers::where('latitude', 'like', '%' . '-6.3126432' . '%')->where('longitude', 'like', '%' . '106.8990464' . '%')->get();

        $data = DetailUsers::with('user', 'user.car')->selectRaw("id,user_id,firstname, lastname, latitude, longitude,
                         ( 10000 * acos( cos( radians(?) ) *
                           cos( radians( latitude ) )
                           * cos( radians( longitude ) - radians(?)
                           ) + sin( radians(?) ) *
                           sin( radians( latitude ) ) )
                         ) AS distance", [$latitude, $longitude, $latitude])
            ->having("distance", "<", $radius)
            ->limit(20)
            ->get();

        // dd($data);

        if ($data->isNotEmpty()) {
            return [
                'status' => true,
                'message' => 'Your request has been processed successfully',
                'data' => $data
            ];
        }

        return [
            'status' => false,
            'message' => 'Your request has been processed successfully',
            'data' => null
        ];
        // dd($data);
    }
}
