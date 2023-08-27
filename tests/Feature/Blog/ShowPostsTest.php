<?php

namespace Tests\Feature\Blog;

use Tests\TestCase;
use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowPostsTest extends TestCase
{
    use RefreshDatabase,DatabaseMigrations;

    public function test_posts_list_shows_correclty_on_main_blog_page()
    {
        $postOne = \App\Models\Blog\Post::factory()->create();
        $postOne = \App\Models\Blog\Post::factory()->create();
        // $response = $this->get(route('blog.index'));
        // $response->assertSuccessful();
    }
    public function test_single_post_shows_correctly_on_the_show_page(){

    }
    public function posts_paginate_works(){

    }
}
