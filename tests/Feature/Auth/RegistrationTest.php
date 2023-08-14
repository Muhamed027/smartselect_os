<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use App\Livewire\Auth\LoginUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;



    /**@test */
    public function test_registration_page_contains_livewire_component()
    {
        self::get(route('user.register'))
            ->assertSuccessful()
            ->assertSeeLivewire('auth.register-user');
    }
    public function test_is_redirected_if_already_logged_in()
    {
        $user = User::factory()->create();
    
        self::be($user);

        self::get(route('register'))
            ->assertRedirect(route('home'));
    }
    /** @test */
    function test_a_user_can_register()
    {
        Event::fake();

        Livewire::test('auth.register-user')
            ->set('name', 'Tall Stack')
            ->set('email', 'tallstack@example.com')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertRedirect(route('home'));

        $this->assertTrue(User::whereEmail('tallstack@example.com')->exists());
        $this->assertEquals('tallstack@example.com', Auth::user()->email);

        Event::assertDispatched(Registered::class);
    }

    /** @test */
    function test_name_is_required()
    {
        Livewire::test('auth.register-user')
            ->set('name', '')
            ->call('register')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test */
    function test_email_is_required()
    {
        Livewire::test('auth.register-user')
            ->set('email', '')
            ->call('register')
            ->assertHasErrors(['email' => 'required']);
    }

    /** @test */
    function test_email_is_valid_email()
    {
        Livewire::test('auth.register-user')
            ->set('email', 'tallstack')
            ->call('register')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    function test_email_hasnt_been_taken_already()
    {
        User::factory()->create(['email' => 'tallstack@example.com']);

        Livewire::test('auth.register-user')
            ->set('email', 'tallstack@example.com')
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    function test_see_email_hasnt_already_been_taken_validation_message_as_user_types()
    {
        User::factory()->create(['email' => 'tallstack@example.com']);

        Livewire::test('auth.register-user')
            ->set('email', 'smallstack@gmail.com')
            ->assertHasNoErrors()
            ->set('email', 'tallstack@example.com')
            ->call('register')
            ->assertHasErrors(['email' => 'unique']);
    }

    /** @test */
    function test_password_is_required()
    {
        Livewire::test('auth.register-user')
            ->set('password', '')
            ->set('passwordConfirmation', 'password')
            ->call('register')
            ->assertHasErrors(['password' => 'required']);
    }

    /** @test */
    function test_password_is_minimum_of_eight_characters()
    {
        Livewire::test('auth.register-user')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['password' => 'min']);
    }

    /** @test */
    function test_password_matches_password_confirmation()
    {
        Livewire::test('auth.register-user')
            ->set('email', 'tallstack@example.com')
            ->set('password', 'password')
            ->set('passwordConfirmation', 'not-password')
            ->call('register')
            ->assertHasErrors(['password' => 'same']);
    }
}
