<?php

namespace App\Http\Controllers\User;

use App\Http\Filters\UserFilter;
use App\Http\Requests\User\FilterRequest;
use App\Models\User;

class IndexController extends BaseUserController
{
    public function __invoke(FilterRequest $request) {

        $data = $request->validated();

        $filter = app()->make(UserFilter::class, ['queryParams' => array_filter($data)]);
        $users = User::filter($filter)->paginate(10);

        return view('users.index', compact('users'));
    }
}
