<?php

namespace App\Http\Livewire\Home\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.home.profile.index', compact('user'))->layout('layouts.home');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('home');
    }
}
