<?php

namespace App\Http\Controllers;

use App\Services\FrontService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function checkout()
    {
        return view('pages.front.checkout');
    }
}
