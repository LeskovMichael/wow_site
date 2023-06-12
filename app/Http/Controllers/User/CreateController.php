<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends BaseUserController
{
    public function __invoke() {
        //$this->authorize('create', [User::class]);
        return view('users.create');
    }
}
