<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.home.users.login')->layout('layouts.auth');
    }
}
