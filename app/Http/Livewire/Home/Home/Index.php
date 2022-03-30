<?php

namespace App\Http\Livewire\Home\Home;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.home.home.index')->layout('layouts.home');
    }
}
