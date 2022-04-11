<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use App\Models\Admin\settings\Footer;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Label extends Component
{

    public $upLabel,$widgetLabel1,$widgetLabel2,$widgetLabel3,$widgetLabel4,$widgetLabel5,
            $rssLabel,$socialLabel,$supportLabel,$phoneLabel,$addressLabel,$emailLabel,$aboutHeadLabel,
            $aboutbodyLabel,$copyRight;
     public Footer $footer;

     public function __construct()
     {
        $footer = DB::connection('mysql-settings')->table('footers')->first();

        //Variable Value
        $this->upLabel        = $footer->upLabel;
        $this->widgetLabel1   = $footer->widgetLabel1;
        $this->widgetLabel2   = $footer->widgetLabel2;
        $this->widgetLabel3   = $footer->widgetLabel3;
        $this->widgetLabel4   = $footer->widgetLabel4;
        $this->widgetLabel5   = $footer->widgetLabel5;
        $this->rssLabel       = $footer->rssLabel;
        $this->socialLabel    = $footer->socialLabel;
        $this->supportLabel   = $footer->supportLabel;
        $this->phoneLabel     = $footer->phoneLabel;
        $this->addressLabel   = $footer->addressLabel;
        $this->emailLabel     = $footer->emailLabel;
        $this->aboutHeadLabel = $footer->aboutHeadLabel;
        $this->aboutbodyLabel = $footer->aboutbodyLabel;
        $this->copyRight      = $footer->copyRight;
     }

    public function render()
    {
        return view('livewire.admin.settings.footer.label');
    }

    public function update()
    {
        $footer = DB::connection('mysql-settings')->table('footers')->limit(1);

        //Validate
        $this->validate([
            'upLabel'       => 'required',
            'widgetLabel1'  => 'required',
            'widgetLabel2'  => 'required',
            'widgetLabel3'  => 'required',
            'widgetLabel4'  => 'required',
            'widgetLabel5'  => 'required',
            'rssLabel'      => 'required',
            'socialLabel'   => 'required',
            'supportLabel'  => 'required',
            'phoneLabel'    => 'required',
            'addressLabel'  => 'required',
            'emailLabel'    => 'required',
            'aboutHeadLabel'=> 'required',
            'aboutbodyLabel'=> 'required',
            'copyRight'     => 'required',
        ]);

        //Update
        $footer->update([
            'upLabel'       => $this->upLabel,
            'widgetLabel1'  => $this->widgetLabel1,
            'widgetLabel2'  => $this->widgetLabel2,
            'widgetLabel3'  => $this->widgetLabel3,
            'widgetLabel4'  => $this->widgetLabel4,
            'widgetLabel5'  => $this->widgetLabel5,
            'rssLabel'      => $this->rssLabel,
            'socialLabel'   => $this->socialLabel,
            'supportLabel'  => $this->supportLabel,
            'phoneLabel'    => $this->phoneLabel,
            'addressLabel'  => $this->addressLabel,
            'emailLabel'    => $this->emailLabel,
            'aboutHeadLabel'=> $this->aboutHeadLabel,
            'aboutbodyLabel'=> $this->aboutbodyLabel,
            'copyRight'     => $this->copyRight
        ]);

    }
}
