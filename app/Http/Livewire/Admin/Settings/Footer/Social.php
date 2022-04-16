<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footer;
use Illuminate\Support\Facades\DB;

class Social extends Component
{
    public $address,$phone,$email,$socialIcon1,$socialLink1,$socialIcon2,$socialLink2,$socialIcon3,$socialLink3,
    $socialIcon4,$socialLink4,$socialIcon5,$socialLink5,$socialIcon6,$socialLink6;

    public Footer $footer;

    public function __construct()
    {
       $footer = DB::connection('mysql-settings')->table('footers')->first();

       //Variable Value
       $this->address     = $footer->address;
       $this->phone       = $footer->phone;
       $this->email       = $footer->email;
       $this->socialIcon1 = $footer->socialIcon1;
       $this->socialLink1 = $footer->socialLink1;
       $this->socialIcon2 = $footer->socialIcon2;
       $this->socialLink2 = $footer->socialLink2;
       $this->socialIcon3 = $footer->socialIcon3;
       $this->socialLink3 = $footer->socialLink3;
       $this->socialIcon4 = $footer->socialIcon4;
       $this->socialLink4 = $footer->socialLink4;
       $this->socialIcon5 = $footer->socialIcon5;
       $this->socialLink5 = $footer->socialLink5;
       $this->socialIcon6 = $footer->socialIcon6;
       $this->socialLink6 = $footer->socialLink6;
    }

    public function render()
    {
        return view('livewire.admin.settings.footer.social');
    }

    public function update()
    {
        $footer = DB::connection('mysql-settings')->table('footers')->limit(1);

        //Update
        $footer->update([
            'address'      => $this->address,
            'phone'        => $this->phone,
            'email'        => $this->email,
            'socialIcon1'  => $this->socialIcon1,
            'socialLink1'  => $this->socialLink1,
            'socialIcon2'  => $this->socialIcon2,
            'socialLink2'  => $this->socialLink2,
            'socialIcon3'  => $this->socialIcon3,
            'socialLink3'  => $this->socialLink3,
            'socialIcon4'  => $this->socialIcon4,
            'socialLink4'  => $this->socialLink4,
            'socialIcon5'  => $this->socialIcon5,
            'socialLink5'  => $this->socialLink5,
            'socialIcon6'  => $this->socialIcon6,
            'socialLink6'  => $this->socialLink6
        ]);

        $this->emit('toast', 'success', 'اطلاعات با موفقیت ویرایش شد');

    }

}
