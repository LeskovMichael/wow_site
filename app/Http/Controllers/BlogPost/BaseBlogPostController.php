<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Services\BlogPost\Service;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class BaseBlogPostController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
