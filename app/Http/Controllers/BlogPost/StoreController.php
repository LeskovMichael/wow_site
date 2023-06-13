<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPost\StoreRequest;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class StoreController extends BaseBlogPostController
{
    public function __invoke(StoreRequest $request) {
        $blogPostData = $request->validated();
        $this->service->store($blogPostData);

        return redirect()->route('blog_posts.index');
    }
}
