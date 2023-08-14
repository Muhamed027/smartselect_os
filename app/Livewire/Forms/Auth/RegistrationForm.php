<?php

namespace App\Livewire\Forms\Auth;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegistrationForm extends Form
{
    #[Rule('required|min:2|max:24')]
    public  $first_name = '';


    #[Rule('required|min:2|max:24')]
    public  $last_name = '';



    #[Rule('required|min:6|max:12')]
    public  $username = '';

    #[Rule('required|min:3|unique:users')]
    public $email = '';

    #[Rule('required|min:8')]
    public $password = '';

    #[Rule('required|same:password')]
    public $confirm_password = '';



}
