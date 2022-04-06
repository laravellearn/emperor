<?php

namespace App\Http\Livewire\Home\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Footer extends Component
{
    public function render()
    {
        $footer = DB::connection('mysql-settings')->table('footers')->get();
        $footer = $footer[0];
        return view('livewire.home.layouts.footer',compact('footer'))->layout('home');
    }
}
