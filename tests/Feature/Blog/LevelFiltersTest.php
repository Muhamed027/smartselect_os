<?php

namespace Tests\Feature;

use App\Livewire\Blog\LevelFilters;
use Tests\TestCase;
use App\Models\User;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use App\Models\Blog\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;

class LevelFiltersTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    // public function test_index_page_contain_level_filters_livewire_component(){
    //     $user = User::factory()->create();

    //     $categoryOne = Category::factory()->create(['name' => 'badget']);

    //     $levelBeginner = Level::factory()->create(['name' => 'beginner']);
    //     $post=Post::factory()->create([
    //         'user_id'=>$user->id,
    //         'category_id'=>$categoryOne,
    //         'level_id'=>$levelBeginner->id,
    //         'title'=>'my ugly post',
    //         'body'=>'my ugly description for my frist post',
    //     ]);
    //     $this->get(route('blog.index'))
    //             ->assertSeeLivewire(LevelFilters::class);
    //     Livewire::test(Level::class);
    // }
    // // public function  test_shows_correct_level_count(){

    // }
}
