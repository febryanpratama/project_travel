<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function index()
    {
        return view('pages.tenant.transaction.index');
    }
}
