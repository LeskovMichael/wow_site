<?php

namespace App\Http\Controllers;

use App\Models\WowUser;
use Illuminate\Http\Request;

class WowUserController extends Controller
{
    public function index() {
        $wowUsers = WowUser::all();
        return view('wow_users.index', compact('wowUsers'));
    }

    public function create() {
        $wowUsers = WowUser::all();
        return view('wow_users.create', compact('wowUsers'));
    }

    public function store() {
        $data = request()->validate([
            'nickname' => 'string',
            'class' => 'string',
            'specialization' => 'string'
        ]);
        WowUser::create($data);
        return redirect()->route('wow_users.index');
    }

    public function show(WowUser $wowUser) {
        return view('wow_users.show', compact('wowUser'));
    }

    public function edit() {
        $wowUsers = WowUser::all();
        return view('wow_users.edit', compact('wowUsers'));
    }

    public function update() {
        $wowUsers = WowUser::all();
        return view('wow_users.update', compact('wowUsers'));
    }

    public function destroy() {
        $wowUsers = WowUser::all();
        return view('wow_users.destroy', compact('wowUsers'));
    }
}
