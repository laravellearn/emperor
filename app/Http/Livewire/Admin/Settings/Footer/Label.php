<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Label extends Component
{
    public function render()
    {
        $footer = DB::connection('mysql-settings')->table('footers')->get();
        $footer = $footer[0];
        return view('livewire.admin.settings.footer.label',compact('footer'));
    }
}
