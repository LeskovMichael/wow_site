<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if (!isset($user)) return redirect()->route('home');
        return view('account', compact('user'));
    }
}
