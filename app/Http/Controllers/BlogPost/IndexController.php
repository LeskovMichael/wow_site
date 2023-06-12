<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Filters\BlogPostFilter;
use App\Http\Requests\BlogPost\FilterRequest;
use App\Models\BlogPost;

class IndexController extends BaseBlogPostController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(BlogPostFilter::class, ['queryParams' => array_filter($data)]);
        $blogPosts = BlogPost::filter($filter)->paginate();

        return view('blog_posts.index', compact('blogPosts'));
    }
}
