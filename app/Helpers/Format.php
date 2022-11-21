<?php

namespace App\Helpers;

use App\Models\CarPhoto;
use App\Models\Cart;
use DateTime;
use Illuminate\Support\Facades\Http;

class Format
{
    static function rupiahFront($value)
    {
        $length = strlen($value);
        // dd($value);
        if ($length == 6) {
            $val = substr($value, 0, 3);

            // dd($value);
            // $value = substr($value, 0, -6) . '.' . substr($value, -6, 3) . '.' . substr($value, -3);
            return $val;
        } else if ($length == 7) {
            $val = substr($value, 0, 4);

            return $val;
        }
        // return $value;
    }

    static function cart($user_id)
    {
        $data = Cart::with('car', 'owner', 'borrower', 'car.photo')->where('borrower_id', $user_id)->where('status', 'Unpaid')->get();

        // dd($data);
        return $data;
    }

    static function days($start, $end)
    {

        $to = \Carbon\Carbon::parse($start);
        $from = \Carbon\Carbon::parse($end);

        $days = $to->diffInDays($from);

        return $days;
    }

    static function photo($car_id)
    {
        $photo = CarPhoto::where('car_id', $car_id)->first();

        return $photo->photo_path;
    }

    static function getDistance($lator, $longor, $latdes, $longdes)
    {
        // curl_init();
        // dd(env('GOOGLE_MAPS_API_KEY'));
        // $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=-6.2029824,106.8662784&destinations=-6.2226432,106.8990464&key=AIzaSyBFIqcyfKaVoWhs4zGxkxqUaLKWl_e1ZgM';
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=' . $lator . ',' . $longor . '&destinations=' . $latdes . ',' . $longdes . '&key=' . env('GOOGLE_MAPS_API_KEY');
        $response = Http::get($url);
        $response = json_decode($response, true);
        // dd($response);
        $distance = $response['rows'][0]['elements'][0]['distance']['text'];
        $time = $response['rows'][0]['elements'][0]['duration']['text'];

        // dd($distance);

        return $distance . " - " . $time;
        // return [
        //     'distance' => $distance,
        //     'time' => $time
        // ];
    }
}
