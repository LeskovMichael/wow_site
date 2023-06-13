<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends BaseUserController
{
    public function __invoke(User $user, UpdateRequest $request) {
        $data = $request->validated();
        $this->service->update($data);
        return redirect()->route('users.show', $user->id);
    }
}
