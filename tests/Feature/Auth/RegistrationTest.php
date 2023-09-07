<?php

use App\Models\User;
use Livewire\Livewire;
use App\Livewire\Auth\LoginUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Testing\WithFaker;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('registration page contains livewire component', function () {
    self::get(route('user.register'))
        ->assertSuccessful()
        ->assertSeeLivewire('auth.register-user');
});

test('is redirected if already logged in', function () {
    $user = User::factory()->create();

    self::be($user);

    self::get(route('user.register'))
        ->assertRedirect(route('home'));
});

test('a user can register', function () {
    Event::fake();

    Livewire::test('auth.register-user')
        ->set('username', 'Tall Stack')
        ->set('email', 'tallstack@example.com')
        ->set('password', 'password')
        ->set('passwordConfirmation', 'password')
        ->call('register')
        ->assertRedirect(route('home'));

    expect(User::whereEmail('tallstack@example.com')->exists())->toBeTrue();
    expect(Auth::user()->email)->toEqual('tallstack@example.com');

    Event::assertDispatched(Registered::class);
});

test('name is required', function () {
    Livewire::test('auth.register-user')
        ->set('username', '')
        ->call('register')
        ->assertHasErrors(['username' => 'required']);
});

test('email is required', function () {
    Livewire::test('auth.register-user')
        ->set('email', '')
        ->call('register')
        ->assertHasErrors(['email' => 'required']);
});

test('email is valid email', function () {
    Livewire::test('auth.register-user')
        ->set('email', 'tallstack')
        ->call('register')
        ->assertHasErrors(['email' => 'email']);
});

test('email hasnt been taken already', function () {
    User::factory()->create(['email' => 'tallstack@example.com']);

    Livewire::test('auth.register-user')
        ->set('email', 'tallstack@example.com')
        ->call('register')
        ->assertHasErrors(['email' => 'unique']);
});

test('see email hasnt already been taken validation message as user types', function () {
    User::factory()->create(['email' => 'tallstack@example.com']);

    Livewire::test('auth.register-user')
        ->set('email', 'smallstack@gmail.com')
        ->assertHasNoErrors()
        ->set('email', 'tallstack@example.com')
        ->call('register')
        ->assertHasErrors(['email' => 'unique']);
});

test('password is required', function () {
    Livewire::test('auth.register-user')
        ->set('password', '')
        ->set('passwordConfirmation', 'password')
        ->call('register')
        ->assertHasErrors(['password' => 'required']);
});

test('password is minimum of eight characters', function () {
    Livewire::test('auth.register-user')
        ->set('password', 'secret')
        ->set('passwordConfirmation', 'secret')
        ->call('register')
        ->assertHasErrors(['password' => 'min']);
});

test('password matches password confirmation', function () {
    Livewire::test('auth.register-user')
        ->set('email', 'tallstack@example.com')
        ->set('password', 'password')
        ->set('passwordConfirmation', 'not-password')
        ->call('register')
        ->assertHasErrors(['password' => 'same']);
});
