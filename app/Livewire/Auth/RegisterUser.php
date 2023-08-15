<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterUser extends Component
{

    #[Rule('required|min:3')]
    public  $username = '';

    #[Rule('required|min:3|unique:users')]
    public $email = '';

    #[Rule('required|min:8')]
    public $password = '';

    #[Rule('required|same:password')]
    public $confirm_password = '';


    public function updated($propretyName)
    {
        // strtoupper($propretyName);
        $this->validateOnly($propretyName);
    }

    public function register()
    {
        $this->validate();
        // dd($this->validate());

        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()
            ->intended(route('home'))
            ->with('success', 'you are creating a new accout succefuly');
    }

    public function render()
    {
        return view('livewire.auth.register-user');
    }
}
