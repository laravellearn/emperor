<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\settings\Footermenu;
use Illuminate\Support\Facades\DB;

class MenuUpdate extends Component
{
    public Footermenu $Footermenu;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'Footermenu.title'    => 'required',
        'Footermenu.type'     => 'required',
        'Footermenu.isActive'     => 'nullable',
        'Footermenu.url'     => 'nullable',
    ];

    public function MenuForm()
    {
        $this->validate();
        $this->Footermenu->update($this->validate());
        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
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

    public function loadMenu()
    {
        $this->readyToLoad = true;
    }


    public function render()
    {
        $menus = $this->readyToLoad ? Footermenu::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        $footerMenu = $this->Footermenu;
        $footerMenu->isActive == 1 ? $footerMenu->isActive = true : $footerMenu->isActive = false;
        $footer = DB::connection('mysql-settings')->table('footers')->first();

        $headerMenu[] = $footer->widgetLabel1;
        $headerMenu[] = $footer->widgetLabel2;
        $headerMenu[] = $footer->widgetLabel3;
        $headerMenu[] = $footer->widgetLabel4;
        $headerMenu[] = $footer->widgetLabel5;

        return view('livewire.admin.settings.footer.menu-update',compact('menus','footerMenu','headerMenu'));
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $logo = Footermenu::find($this->deleteId);
        $logo->delete();
        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

}
