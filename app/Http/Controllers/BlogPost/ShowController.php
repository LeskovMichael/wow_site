<?php

namespace App\Http\Controllers\BlogPost;

use App\Models\BlogPost;

class ShowController extends BaseBlogPostController
{
    public function __invoke(BlogPost $blogPost) {
        return view('blog_posts.show', compact('blogPost'));
    }
}
