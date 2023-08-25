<?php

namespace Tests\Unit\Blog;

use App\Models\User;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use App\Models\Blog\Category;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LevelTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_can_get_count_of_each_level()
    {
        // dd(Level::getCount());
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'badget']);

        $levelBeginner = Level::factory()->create(['name' => 'beginner']);
        $levelIntermediate = Level::factory()->create(['name' => 'intermediate']);
        $levelAdvanced = Level::factory()->create(['name' => 'advanced ']);
        $levelExpert = Level::factory()->create(['name' => 'expert']);

        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelBeginner->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelIntermediate->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelIntermediate->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelAdvanced->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelAdvanced->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelAdvanced->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelExpert->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelExpert->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelExpert->id,
        ]);
        Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'level_id' => $levelExpert->id,
        ]);
        $this->assertEquals(10, Level::getCount()['all_levels']);
        $this->assertEquals(1, Level::getCount()['beginner']);
        $this->assertEquals(2, Level::getCount()['intermediate']);
        $this->assertEquals(3, Level::getCount()['advanced']);
        $this->assertEquals(4, Level::getCount()['expert']);
    }
}
