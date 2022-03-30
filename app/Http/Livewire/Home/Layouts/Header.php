<?php

namespace App\Http\Livewire\Home\Layouts;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.home.layouts.header')->layout('home');
    }
}
