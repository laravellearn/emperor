<?php

namespace App\Http\Livewire\Home\Profile;

use Livewire\Component;

class Token extends Component
{
    public function render()
    {
        return view('livewire.home.profile.token')->layout('layouts.login');
    }
}
