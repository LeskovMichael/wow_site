<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        #BlogCategory::get()->random()->id
        #User::all()->random()->id
        return [
            'title' => $this->faker->text(25),
            'content' => $this->faker->text(500),
            'blog_category_id' => 1,
            'user_id' => 1,
        ];
    }
}
