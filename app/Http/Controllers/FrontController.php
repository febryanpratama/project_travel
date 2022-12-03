<?php

namespace App\Http\Controllers;

use App\Services\FrontService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FrontController extends Controller
{
    //
    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index()
    {
        $result = $this->frontService->index();

        // dd($result->data);
        return view('pages.front.landing', ['cars' => $result->data]);
        // if ($result->status) {
        // } else {
        //     // return view('front.index', ['cars' => []]);
        // }
    }

    public function signup()
    {
        $state = DB::table('provinces')->get();

        return view('pages.auth.signup', [
            'state' => $state
        ]);
    }

    public function storeSignup(Request $request)
    {
        $result = $this->frontService->storeSignup($request->all());

        // dd($result);
        if ($result['status']) {
            return redirect('/auth/admin/login')->with('success', $result['message']);
        } else {
            return redirect()->back()->with('error', $result['message']);
        }
    }

    public function detailCar($car_id)
    {
        $result = $this->frontService->detailCar($car_id);

        if ($result->status) {
            return view('pages.front.detail-car', ['data' => $result->data]);
        } else {
            abort(404);
        }
    }

    // 
    public function cart()
    {
        $response = $this->frontService->cart();

        if ($response->status) {
            return view('pages.front.cart', ['data' => $response->data]);
        } else {
            return view('pages.front.cart', ['data' => []]);
        }
    }

    public function storeRentCar(Request $request)
    {
        if (!Auth::check()) {
            return redirect('auth/admin/login');
        }

        $result = $this->frontService->storeRentCar($request->all());

        if ($result['status']) {
            return redirect('/car/' . $result['data']['car_id'] . '/detail')->with('success', $result['message']);
        } else {
            return redirect('/car/' . $result['data']['car_id'] . '/detail')->back()->with('error', $result['message']);
        }
    }

    public function checkout($cart_id)
    {
        // dd(decrypt($cart_id));
        $response = $this->frontService->getChannel($cart_id);

        // dd($response['data']['cart']);

        if ($response['status']) {
            # code...
            return view('pages.front.checkout', [
                'data' => $response['data']['cart'],
                'cart_id' => $cart_id,
                'channel' => $response['data']['payment_channel']
            ]);
        } else {
            return back()->withErrors($response['message']);
        }
        // echo json_decode($response);
        // return view('pages.front.checkout', [
        //     'channel' => $response->data
        // ]);
    }

    public function storeCheckout(Request $request)
    {
        // dd($request->all());
        $response = $this->frontService->requestPayment($request->all());

        // dd();

        if ($response['status']) {
            return Redirect::to($response['data']['transaction']['checkout_url']);
        } else {
            return back()->withErrors($response['message']);
        }
    }

    public function getRedirect(Request $request)
    {
        // dd($request->ip());
        $ip = $request->ip();
        // $response = $this->frontService->responsePayment($request->all());

        if ($ip == '95.111.200.230' || $ip == '127.0.0.1') {
            # code...
            $response = $this->frontService->responsePayment($request->all());

            // return response()->json($response);
            return redirecT('/success-checkout');
        }

        abort(404);
    }

    public function successCheckout()
    {
        return view('pages.front.success-checkout');
    }
}
