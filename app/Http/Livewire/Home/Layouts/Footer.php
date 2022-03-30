<?php

namespace App\Http\Livewire\Home\Layouts;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.home.layouts.footer')->layout('home');
    }
}
