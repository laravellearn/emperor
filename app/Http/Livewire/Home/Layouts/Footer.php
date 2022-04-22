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
        $topLogoFooter = DB::connection('mysql-settings')->table('footer-logos')
                         ->where('isActive',1)->where('type','top')->get();
        $bottomLogoFooter = DB::connection('mysql-settings')->table('footer-logos')
                         ->where('isActive',1)->where('type','bottom')->get();
        return view('livewire.home.layouts.footer',compact('footer','topLogoFooter','bottomLogoFooter'))
                 ->layout('home');
    }
}
