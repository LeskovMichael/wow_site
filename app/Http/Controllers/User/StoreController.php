<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request()->validate([
            'first_name' => 'string',
            'middle_name' => 'string',
            'last_name' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'password' => 'string',
        ]);
        User::create($data);
        return redirect()->route('users.index');
    }
}
