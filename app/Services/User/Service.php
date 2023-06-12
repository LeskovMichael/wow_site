<?php

namespace App\Services\User;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\User;

class Service
{
    public function store($userData) {
        User::firstOrCreate($userData);
    }

    public function update($userData, $user) {
        $user->update($userData);
    }
}
