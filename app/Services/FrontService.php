<?php

namespace App\Services;

use App\Models\Car;
use App\Services\ApiService;

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
}
