<?php

use App\Models\User;
use App\Models\Blog\Post;
use App\Models\Blog\Level;
use App\Models\Blog\Category;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('can get count of each level', function () {
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
    expect((new Level)->getCount()['all_levels'])->toEqual(10);
    expect((new Level)->getCount()['beginner'])->toEqual(1);
    expect((new Level)->getCount()['intermediate'])->toEqual(2);
    expect((new Level)->getCount()['advanced'])->toEqual(3);
    expect((new Level)->getCount()['expert'])->toEqual(4);
});
