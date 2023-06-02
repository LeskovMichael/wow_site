<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {
        $blogPosts = BlogPost::all();
        return view('blog_posts.index', compact('blogPosts'));
    }
}
