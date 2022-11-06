<?php

namespace App\Services\Tenant;

use App\Models\Car;
use App\Models\CarPhoto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CarService
{
    static function storeCar($data)
    {

        // dd($data);
        $validator = Validator::make($data, [
            'brand_car' => 'required',
            'category_id' => 'required|exists:categories,id',
            'name_car' => 'required',
            'seat_car' => 'required|numeric',
            'door_car' => 'required|numeric',
            'baggage_car' => 'required|numeric',
            'license_plate' => 'required',
            'transmission_car' => 'required|in:Automatic,Manual',
            'year_car' => 'required|numeric',
            'car_photo.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price_car' => 'required',
            // 'car_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
            ];
        }

        DB::beginTransaction();

        try {

            $price = str_replace('.', '', $data['price_car']);
            $price = str_replace('Rp ', '', $price);

            // dd($price);

            $car = Car::create([
                'user_id' => Auth::user()->id,
                'brand_car' => $data['brand_car'],
                'category_id' => $data['category_id'],
                'name_car' => $data['name_car'],
                'seat_car' => $data['seat_car'],
                'door_car' => $data['door_car'],
                'bagage_car' => $data['baggage_car'],
                'license_plate' => $data['license_plate'],
                'transmission_car' => $data['transmission_car'],
                'year_car' => $data['year_car'],
                'price_car' => $price
            ]);

            if ($data['car_photo']) {
                foreach ($data['car_photo'] as $file) {
                    $name = time() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('images/cars'), $name);
                    CarPhoto::create([
                        'car_id' => $car->id,
                        'photo_path' => $name,
                    ]);
                }
            }

            DB::commit();

            return [
                'status' => true,
                'message' => 'Car has been created',
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            return [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }


        // if ($data->hasFile('car_photo')) {
        //     $image = $data->file('car_photo');
        //     $name = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('/images/car');
        //     $image->move($destinationPath, $name);
        // }

        // $data['car_photo'] = $name;


    }
}
