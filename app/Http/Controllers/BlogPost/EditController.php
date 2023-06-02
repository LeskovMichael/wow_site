<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(BlogPost $blogPost) {
        $users = User::all();
        return view('blog_posts.edit', compact('blogPost'));
    }
}
