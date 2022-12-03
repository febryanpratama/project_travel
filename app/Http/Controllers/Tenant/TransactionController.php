<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Services\Tenant\TransactionsServices;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    protected $transactionService;

    public function __construct(TransactionsServices $transactionService)
    {
        $this->transactionService = $transactionService;
    }
    //
    public function index()
    {

        $response = $this->transactionService->getTransaction();

        // dd($response);
        return view('pages.tenant.transaction.index', [
            'data' => $response->data,
            'title' => 'Transaction'
        ]);
    }
}
