<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{

    // protected $url = config('api.url');

    // protected $url = env("API_DEV");
    protected $url;

    public function __construct()
    {
        $this->url = env("API_DEV");
    }

    public function get($params = [])
    {

        $response = Http::get($this->url . $params['segment_1']);

        $response = json_decode($response);

        return $response;
    }

    public function post($url, $params = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function put($url, $params = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function delete($url, $params = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    static function apiPayment($endpoint, $params = [])
    {
        $apiKey = env('PAYMENT_API_SANDBOX');

        $baseUrl = env('URL_API_SANDBOX');

        if ($params != null) {
            $payload = $params;
        } else {
            $payload = [];
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => $baseUrl . $endpoint . http_build_query($payload),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        // echo empty($error) ? $response : $error;
        if (empty($error)) {
            return json_decode($response);
        } else {
            return $error;
        }
    }
    static function transaction($endpoint, $params = [])
    {
        $apiKey = env('PAYMENT_API_SANDBOX');

        $baseUrl = env('URL_API_SANDBOX');

        if ($params != null) {
            $payload = $params;
        } else {
            $payload = [];
        }

        // dd($baseUrl . $endpoint);
        // dd($payload['params']);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => $baseUrl . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($payload['params']),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        // dd($response);
        // echo empty($error) ? $response : $error;
        if (empty($error)) {
            return json_decode($response);
        } else {
            return $error;
        }
    }
}
