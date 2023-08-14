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
            'user_id' => User::factory()->create(),
            'category_id' => 1,
            'level_id'=>1,
            'title' => fake()->paragraph(2),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(2),
            'body' => fake()->paragraph(1000,true),
        ];
    }
}
