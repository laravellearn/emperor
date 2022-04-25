<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footer;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Log;

class Namad extends Component
{
    public $linkApp1, $imageApp1, $linkApp2, $imageApp2, $enamad;

    public Footer $footer;

    public function __construct()
    {
        $footer = DB::connection('mysql-settings')->table('footers')->first();

        //Variable Value
        $this->enamad     = $footer->enamad;
        $this->linkApp1       = $footer->linkApp1;
        $this->imageApp1       = $footer->imageApp1;
        $this->linkApp2 = $footer->linkApp2;
        $this->imageApp2 = $footer->imageApp2;
    }

    public function render()
    {
        return view('livewire.admin.settings.footer.namad');
    }

    public function update()
    {
        $footer = DB::connection('mysql-settings')->table('footers')->limit(1);

        //Update
        $footer->update([
            'enamad'      => $this->enamad,
            'linkApp1'        => $this->linkApp1,
            'imageApp1'        => $this->imageApp1,
            'linkApp2'  => $this->linkApp2,
            'imageApp2'  => $this->imageApp2,
        ]);

        //Create Log
        Log::create([
            'user_id' => \Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'update',
            'description' => 'نمادهای فوتر ویرایش شد'
        ]);


        $this->emit('toast', 'success', 'اطلاعات با موفقیت ویرایش شد');
    }
}
