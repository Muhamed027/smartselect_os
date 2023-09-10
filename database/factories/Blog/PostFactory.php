<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1,2),
            'category_id' =>rand(1,20),
            'level_id'=>1,  
            'status_id'=>1,
            'title' => fake()->paragraph(2),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(2),
            'body' => fake()->paragraph(100,true),
        ];
    }
}
