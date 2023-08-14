<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Rule;
use Livewire\Component;

class LoginUser extends Component
{

    
    #[Rule('required|email|exists:users,email')]
    public $email = "";


    #[Rule('required')]
    public $password = "";


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function tryAuthenticateTheUser()
    {
        $credentiels = $this->validate();
        if (auth()->attempt($credentiels)) {
            session()->regenerate();
            return Redirect(route('home'));
        } else {
            $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login-user');
    }
}
