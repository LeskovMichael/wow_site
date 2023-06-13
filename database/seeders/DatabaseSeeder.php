<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\User;
use Database\Factories\BlogCategoryFactory;
use Database\Factories\BlogPostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        BlogCategory::factory(20)->create();
        $tags = BlogTag::factory(20)->create();
        $posts = BlogPost::factory(200)->create();


        foreach ($posts as $post) {
            $tagsForPostIds = $tags->random(5)->pluck('id');
            $post->blog_tags()->sync($tagsForPostIds);
        }
    }
}
