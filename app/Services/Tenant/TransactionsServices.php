<?php

namespace App\Services\Tenant;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionsServices
{

    public function getTransaction()
    {
        $data = Transaction::with('rental', 'car', 'cart')->where('user_id', Auth::user()->id)->get();

        return (object)[
            'status' => true,
            'message' => 'Success Get Transaction',
            'data' => $data
        ];
    }
}
