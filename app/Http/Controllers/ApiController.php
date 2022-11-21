<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    //
    protected $apiMaps = 'AIzaSyBFIqcyfKaVoWhs4zGxkxqUaLKWl_e1ZgM';

    // public function __construct($apiMaps)
    // {
    //     $this->apiMaps = 'AIzaSyBFIqcyfKaVoWhs4zGxkxqUaLKWl_e1ZgM';
    // }

    public function city(Request $request, $province_id)
    {
        $data = DB::table('regencies')->where('province_id', $province_id)->get();

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function district(Request $request, $regency_id)
    {
        $data = DB::table('districts')->where('regency_id', $regency_id)->get();

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function village(Request $request, $district_id)
    {
        $data = DB::table('villages')->where('district_id', $district_id)->get();

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }

    public function getDistance(Request $request)
    {
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=' . $request->lator . ',' . $request->longor . '&destinations=' . $request->latde . ',' . $request->longde . '&key=' . $this->apiMaps;
        // dd($url);
        $response = Http::get($url);
        $response = json_decode($response, true);
        // dd($response);
        $distance = $response['rows'][0]['elements'][0]['distance']['text'];
        $time = $response['rows'][0]['elements'][0]['duration']['text'];

        // dd($distance);

        return $distance . " - " . $time;
    }
}
