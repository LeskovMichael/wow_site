<?php

namespace App\Services\BlogPost;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;

class Service
{
    public function store($blogPostData) {
        $category_name = $blogPostData['category'];
        $category = BlogCategory::firstOrCreate([
            'name' => $category_name,
        ]);
        $blogPostData['blog_category_id'] = $category->id;

        $tag_names = [
            $blogPostData['tag_1'],
            $blogPostData['tag_2'],
            $blogPostData['tag_3'],
        ];

        unset($blogPostData['category']);
        unset($blogPostData['tag_1']);
        unset($blogPostData['tag_2']);
        unset($blogPostData['tag_3']);

        $blogPostData['user_id'] = auth()->user()->id;

        $post = BlogPost::firstOrCreate($blogPostData);
        $tags = [];

        foreach ($tag_names as $tag_name) {
            $tag = BlogTag::firstOrCreate([
                'name' => $tag_name,
            ]);
            $tags[] = $tag->id;
        }

        $post->blog_tags()->sync($tags);
    }

    public function update($blogPostData, $blogPost) {
        $tag_names = $blogPostData['tag_names'];
        $category_name = $blogPostData['category'];

        $category = BlogCategory::firstOrCreate([
            'name' => $category_name,
        ]);
        $blogPostData['blog_category_id'] = $category->id;

        unset($blogPostData['category']);
        unset($blogPostData['tag_names']);

        $blogPostData['user_id'] = auth()->user()->id;

        $tags = [];

        foreach ($tag_names as $tag_name) {
            $tag = BlogTag::firstOrCreate([
                'name' => $tag_name,
            ]);
            $tags[] = $tag->id;
        }

        $blogPost->update($blogPostData);
        $blogPost->blog_tags()->sync($tags);
    }
}
