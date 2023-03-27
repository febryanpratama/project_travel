<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //

    public function index()
    {
        $title = 'List Members';

        $user = User::with('detail')->get();

        // dd($user);

        return view('pages.admin.member.index', [
            'title' => $title,
            'user' => $user
        ]);
    }

    // public function
}
