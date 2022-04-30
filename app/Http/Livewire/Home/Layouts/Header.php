<?php

namespace App\Http\Livewire\Home\Layouts;

use Livewire\Component;

class Header extends Component
{

    public function logout($id)
    {
        \Auth::logout();
        $this->emit('toast', 'success', 'کاربر گرامی؛ از سایت خارج شدید.');

    }

    public function render()
    {
        $user = \Auth::user();
        return view('livewire.home.layouts.header',compact('user'))->layout('home');
    }
}
