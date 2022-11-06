<?php

namespace App\Http\Controllers;

use App\Services\FrontService;
use Illuminate\Http\Request;

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
        return view('layouts.base', ['cars' => $result->data]);
        // if ($result->status) {
        // } else {
        //     // return view('front.index', ['cars' => []]);
        // }
    }

    public function signup()
    {
        return view('pages.auth.signup');
    }

    public function storeSignup(Request $request)
    {
        dd($request->all());
    }
}
