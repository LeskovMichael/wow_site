<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(BlogPost $blogPost) {
        $blogPost->delete();
        return redirect()->route('blog_posts.index');
    }
}
