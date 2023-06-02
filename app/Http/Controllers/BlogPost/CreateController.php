<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke() {
        $blogPosts = BlogPost::all();
        return view('blog_posts.create', compact('blogPosts'));
    }
}
