<?php

namespace App\Services\Tenant;

use App\Models\Rating;
use App\Models\Rental;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RentalService
{
    public function getRental()
    {
        $data = Rental::with('transaction', 'transaction.cart', 'car', 'borrower')->whereRelation('transaction', 'user_id', Auth::user()->id)->get();

        return (object)[
            'status' => true,
            'message' => 'Success Get Rental',
            'data' => $data
        ];
    }

    public function getDetailRental($rental_id)
    {
        $data = Rental::with('transaction', 'transaction.cart', 'car', 'borrower', 'borrower.detail')->whereRelation('transaction', 'user_id', Auth::user()->id)->where('id', $rental_id)->first();

        return (object)[
            'status' => true,
            'message' => 'Success Get Rental',
            'data' => $data
        ];
    }

    public function addRating($data)
    {
        // dd($data);

        $validator = Validator::make($data, [
            'rating' => 'required|numeric',
            'review' => 'required|string'
        ]);

        if ($validator->fails()) {
            # code...
            return (object)[
                'status' => false,
                'message' => $validator->errors()->first(),
                'data' => null
            ];
        }

        $rental = Rental::find(decrypt($data['rent_id']));

        if (!$rental) {
            # code...
            return (object)[
                'status' => false,
                'message' => 'Rental Car Not Found',
                'data' => null
            ];
        }

        Rating::create([
            'rental_id' => $rental->id,
            'user_id' => Auth::user()->id,
            'car_id' => $rental->car_id,
            'rating' => $data['rating'],
            'review' => $data['review']
        ]);

        return (object)[
            'status' => true,
            'message' => 'Success Add Rating',
            'data' => null
        ];
    }
}
