<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footermenu;
use Livewire\WithPagination;

class Menu extends Component
{

    public $image;
    public Footermenu $Footermenu;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->Footermenu = new Footermenu;
    }

    protected $rules = [
        'Footermenu.title'    => 'required',
        'Footermenu.url'     => 'required',
        'Footermenu.type'     => 'required',
    ];

    public function MenuForm()
    {
        $this->validate();
        $logo = $this->Footermenu->query()->create([
            'title'    => $this->Footermenu->title,
            'type'     => $this->Footermenu->type,
            'url'      => $this->Footermenu->url,
            'isActive' => 1,
        ]);
        $this->resetForm();

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $menus = $this->readyToLoad ? Footermenu::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.settings.footer.menu',compact('menus'));
    }

    public function loadMenu()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $menu = Footermenu::find($id);
        if ($menu->isActive == 1) {
            $menu->update([
                'isActive' => 0
            ]);
        } else {
            $menu->update([
                'isActive' => 1
            ]);
        }
        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $menu = Footermenu::find($this->deleteId);
        $menu->delete();
        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->Footermenu->title = null;
        $this->Footermenu->type = null;
        $this->Footermenu->url = null;
    }

}
