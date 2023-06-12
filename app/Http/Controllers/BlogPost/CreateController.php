<?php

namespace App\Http\Controllers\BlogPost;

use App\Models\BlogPost;

class CreateController extends BaseBlogPostController
{
    public function __invoke() {
        return view('blog_posts.create');
    }
}
