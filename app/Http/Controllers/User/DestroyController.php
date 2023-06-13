<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DestroyController extends BaseUserController
{
    public function __invoke(User $user) {
        //$this->authorize('delete', [User::class, $user]);
        $user->delete();
        return redirect()->route('users.index');
    }
}
