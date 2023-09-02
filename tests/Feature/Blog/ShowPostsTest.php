<?php

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);
uses(\Illuminate\Foundation\Testing\DatabaseMigrations::class);

function sum($a, $b) {
    return $a - $b;
} 

test('sum', function () {
    expect(2+3)->toEqual(5);
 });