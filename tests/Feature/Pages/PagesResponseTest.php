<?php

use App\Models\Blog\Post;
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
    $article=Post::factory()->create();
    get(route('blog.show',$article))
        ->assertOk();
});
