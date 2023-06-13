<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends BaseUserController
{
    public function __invoke(User $user) {
        //$this->authorize('update', [User::class, $user]);
        return view('users.edit', compact('user'));
    }
}
