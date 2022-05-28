<?php

namespace App\Http\Livewire\Home\Layouts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{

    public function logout()
    {
        Auth::logout();
        return to_route('home');

    }

    public function render()
    {
        $user = Auth::user();
        return view('livewire.home.layouts.header',compact('user'))->layout('home');
    }
}
