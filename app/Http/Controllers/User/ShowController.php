<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends BaseUserController
{
    public function __invoke(User $user) {
        //$this->authorize('view', [User::class, $user]);
        return view('users.show', compact('user'));
    }
}
