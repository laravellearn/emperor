<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Admin\settings\Footerlogo;
use App\Models\Admin\Log;

class LogoUpdate extends Component
{
    use WithFileUploads;

    public $image;
    public Footerlogo $Footerlogo;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'Footerlogo.title'    => 'required',
        'Footerlogo.type'     => 'required',
        'Footerlogo.isActive'     => 'nullable',
        'Footerlogo.image'     => 'nullable',
        'Footerlogo.url'     => 'nullable',
    ];

    public function LogoForm()
    {
        $this->validate();
        $this->Footerlogo->update($this->validate());
        if ($this->image) {
            $uploadImage = $this->uploadImage();
            $this->Footerlogo->update([
                'image' => $uploadImage
            ]);
        }

        //Create Log
        Log::create([
            'user_id' => \Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'update',
            'description' => 'لوگوی فوتر ویرایش شد'
        ]);

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "footerlogo/$year/$month";
        $name = time() . '-' . $this->image->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->image->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function changeStatus($id)
    {
        $logo = Footerlogo::find($id);
        if ($logo->isActive == 1) {
            $logo->update([
                'isActive' => 0
            ]);
        } else {
            $logo->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::create([
            'user_id' => \Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'update',
            'description' => 'وضعیت لوگوی فوتر تغییر کرد'
        ]);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function loadLogo()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $logos = $this->readyToLoad ? Footerlogo::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        $footerlogo = $this->Footerlogo;
        $footerlogo->isActive == 1 ? $footerlogo->isActive = true : $footerlogo->isActive = false;
        return view('livewire.admin.settings.footer.logo-update', compact('footerlogo', 'logos'));
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $logo = Footerlogo::find($this->deleteId);
        $logo->delete();

        //Create Log
        Log::create([
            'user_id' => \Auth::user()->id,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'actionType' => 'delete',
            'description' => 'یک لوگوی فوتر حذف شد'
        ]);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }
}
