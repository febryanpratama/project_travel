<?php

namespace App\Services;

use App\Models\Car;
use App\Models\Cart;
use App\Models\DetailUsers;
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

            $user->assignRole('Tenant');

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
        $data = Car::with('user', 'photo', 'categories', 'user.detail')->where('id', decrypt($car_id))->first();

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
}
