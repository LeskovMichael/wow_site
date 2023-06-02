<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(BlogPost $blogPost) {
        return view('blog_posts.show', compact('blogPost'));
    }
}
