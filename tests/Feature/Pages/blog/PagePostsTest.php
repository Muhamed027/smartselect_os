<?php




use function Pest\Laravel\get;

use App\Livewire\Blog\PostsIndex;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('has posts livewire component', function () {
    get(route('blog.index'))
        ->assertOk()
        ->assertSeeLivewire(PostsIndex::class);
});
it('it shows popular games correctly', function () {
    //expect()->
});

