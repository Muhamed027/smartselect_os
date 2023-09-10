<?php

use App\Models\User;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use App\Models\Blog\Status;
use App\Models\Blog\Category;
use function Pest\Laravel\get;
use Illuminate\Foundation\Testing\RefreshDatabase;
uses(RefreshDatabase::class);

it('it gives back a successfull response for home page ', function () {
    get(route('home'))
        ->assertOk();
});
it('it gives back a successfull response for blog page ', function () {
    get(route('blog.index'))
        ->assertOk();
});
it('it gives back a successfull response for store page ', function () {
    get(route('store.index'))
        ->assertOk();
});
it('it gives back a successfull response for articles page ', function () {
    $user = User::factory()->create();
    $status = Status::factory()->create();
    $category = Category::factory()->create();
    $level = Level::factory()->create();
    $article = Post::factory()->create([
        'user_id' => $user->id,
        'level_id' => $level->id,
        'category_id' => $category->id,
        'status_id' => $status->id,
    ]);
    get(route('blog.show',$article))
        ->assertOk();
});
