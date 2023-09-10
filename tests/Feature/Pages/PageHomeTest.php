<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

it('it shows some static text correctly', function () {
    get(route('home'))
        ->assertOk()
        ->assertSeeTextInOrder([
            'Find the Best Deals Backed by Expertise .',
            'Your Guide to smart Choices.',
        ]);
});

// it('', function () {
    
// });

