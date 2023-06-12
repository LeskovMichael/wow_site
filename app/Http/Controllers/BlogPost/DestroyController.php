<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;

class DestroyController extends BaseBlogPostController
{
    public function __invoke(BlogPost $blogPost) {
        $blogPost->delete();
        return redirect()->route('blog_posts.index');
    }
}
