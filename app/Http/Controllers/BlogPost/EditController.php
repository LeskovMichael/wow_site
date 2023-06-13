<?php

namespace App\Http\Controllers\BlogPost;

use App\Models\BlogPost;

class EditController extends BaseBlogPostController
{
    public function __invoke(BlogPost $blogPost) {
        return view('blog_posts.edit', compact('blogPost'));
    }
}
