<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footerlogo;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use App\Models\Admin\Log;

class LogoTrash extends Component
{
    public Footerlogo $Footerlogo;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->Footerlogo = new Footerlogo;
    }

    public function render()
    {
        $logos = $this->readyToLoad ? Footerlogo::where('title', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(10) : [];
        return view('livewire.admin.settings.footer.logo-trash',compact('logos'));
    }

    public function loadLogo()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $logo = Footerlogo::withTrashed()->findOrFail($this->deleteId);
        Storage::delete($logo->image);
        $logo->forceDelete();

        //Create Log
        Log::logWritter('delete', 'لوگوی فوتر برای همیشه حذف شد - ' . $logo->title);

        $this->emit('toast', 'success', 'رکورد برای همیشه حذف شد');
    }

    public function restore($id)
    {
        $logo = Footerlogo::withTrashed()->findOrFail($id);
        $logo->restore();

        //Create Log
        Log::logWritter('restore', 'لوگوی فوتر بازیابی شد - ' . $logo->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }

}
