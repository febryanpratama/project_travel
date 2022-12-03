<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\ApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    //
    protected $apiMaps = 'AIzaSyBFIqcyfKaVoWhs4zGxkxqUaLKWl_e1ZgM';


    // public function __construct($apiMaps)
    // {
    //     $this->apiMaps = 'AIzaSyBFIqcyfKaVoWhs4zGxkxqUaLKWl_e1ZgM';
    // }

    protected $apiService;
    protected $privateKey = '1kR8l-lToOh-d0t0b-tcTdn-Wg5wG';

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

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

    public function calculator(Request $request)
    {
        if ($request->code != 'COD') {
            $response = $this->apiService->apiPayment('merchant/fee-calculator?', [
                'code' => $request->code,
                'amount' => $request->amount,
            ]);

            return response()->json([
                'status' => $response->success,
                'data' => $response->data
            ]);
        } else {
            return response()->json([
                'status' => true,
                'data' => [
                    'fee' => 0,
                    'total' => $request->amount
                ]
            ]);
        }
    }

    public function statusTransaksi(Request $request)
    {

        $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $json = $request->getContent();
        $signature = hash_hmac('sha256', $json, $this->privateKey);

        if ($signature !== (string) $callbackSignature) {
            return Response::json([
                'success' => false,
                'message' => 'Invalid signature',
            ]);
        }

        if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            return Response::json([
                'success' => false,
                'message' => 'Unrecognized callback event, no action was taken',
            ]);
        }

        $data = json_decode($json);

        if (JSON_ERROR_NONE !== json_last_error()) {
            return Response::json([
                'success' => false,
                'message' => 'Invalid data sent by tripay',
            ]);
        }

        $uniqueRef = $data->merchant_ref;
        $status = strtoupper((string) $data->status);

        if ($data->is_closed_payment === 1) {
            $invoice = Transaction::where('merchant_ref', $uniqueRef)
                ->where('status', '=', 'UNPAID')
                ->first();

            if (!$invoice) {
                return Response::json([
                    'success' => false,
                    'message' => 'No invoice found or already paid: ' . $uniqueRef,
                ]);
            }

            switch ($status) {
                case 'PAID':
                    $invoice->update(['status' => 'PAID']);
                    break;

                case 'EXPIRED':
                    $invoice->update(['status' => 'EXPIRED']);
                    break;

                case 'FAILED':
                    $invoice->update(['status' => 'FAILED']);
                    break;

                default:
                    return Response::json([
                        'success' => false,
                        'message' => 'Unrecognized payment status',
                    ]);
            }

            return Response::json(['success' => true]);
        }
    }
}
