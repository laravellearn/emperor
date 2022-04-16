<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footerlogo;

class Logo extends Component
{
    public $title,$type,$isActive,$image;
    public Footerlogo $Footerlogo;

    public function mount(){
        $this->Footerlogo = new Footerlogo;
    }

    protected $rules = [
        'Footerlogo.title'    => 'required',
        'Footerlogo.type'     => 'required',
        'Footerlogo.isActive' => 'nullable',
    ];

    public function LogoForm(){
        $this->validate();

        $this->Footerlogo->image = $this->uploadImage();

        $this->Footerlogo->query()->create([
            'Footerlogo.title'    => $this->Footerlogo->title,
            'Footerlogo.type'     => $this->Footerlogo->type,
            'Footerlogo.isActive' => 1,
        ]);

        $this->emit('toast', 'success', 'اطلاعات با موفقیت ثبت شد');
    }

    public function uploadImage(){
        $year = now()->year;
        $month = now()->month;
        $directory = "footerlogo/$year/$month";
        $name = $this->image->getOriginalName();
        $this->image->storeAs($directory,$name);
        return "$directory/$name";
    }

    public function render()
    {
        return view('livewire.admin.settings.footer.logo');
    }
}
