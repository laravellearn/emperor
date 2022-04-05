<?php

namespace App\Http\Livewire\Admin\Layouts;

use Livewire\Component;
use Verta;


class Header extends Component
{

    public function render()
    {
        $v = verta();
        $v = $v->format('%d %B %Y');
        $user = \Auth::user();
        return view('livewire.admin.layouts.header',compact('v','user'));
    }
}
