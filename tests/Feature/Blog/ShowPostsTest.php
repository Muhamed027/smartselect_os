<?php

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);
uses(\Illuminate\Foundation\Testing\DatabaseMigrations::class);

function sum($a, $b) {
    return $a - $b;
} 

test('sum', function () {
    $result = sum(1, 2);
  
    expect($result)->not()->toBe(3);
 });