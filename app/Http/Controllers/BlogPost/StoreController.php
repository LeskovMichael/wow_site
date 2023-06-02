<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke() {
        $blogPostData = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'category' => 'string',
            'tag_1' => 'string',
            'tag_2' => 'string',
            'tag_3' => 'string',
        ]);

        $category = $blogPostData['category'];
        $tags = [
            $blogPostData['tag_1'],
            $blogPostData['tag_2'],
            $blogPostData['tag_3'],
        ];

        unset($blogPostData['category']);
        unset($blogPostData['tag_1']);
        unset($blogPostData['tag_2']);
        unset($blogPostData['tag_3']);

        BlogPost::create($blogPostData);

        return redirect()->route('blog_posts.index');
    }
}
