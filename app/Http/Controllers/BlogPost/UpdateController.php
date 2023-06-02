<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(BlogPost $blogPost) {
        $blogPostData = request()->validate([
            'title' => 'string',
            'content' => 'text',
            'category' => 'string',
            'tag' => 'string',
        ]);
        $blogPost->update($blogPostData);
        return redirect()->route('blog_posts.show', $blogPostData);
    }
}
