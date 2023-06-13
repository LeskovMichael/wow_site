<?php

namespace App\Http\Controllers\BlogPost;

use App\Http\Requests\BlogPost\UpdateRequest;
use App\Models\BlogPost;

class UpdateController extends BaseBlogPostController
{
    public function __invoke(UpdateRequest $request, BlogPost $blogPost) {
        $blogPostData = $request->validated();
        $this->service->update($blogPostData, $blogPost);

        return redirect()->route('blog_posts.show', $blogPost->id);
    }
}
