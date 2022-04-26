<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use App\Models\Admin\settings\Footermenu;
use App\Models\Admin\settings\Footer;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Admin\Log;

class Menu extends Component
{

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
        $menu = $this->Footermenu->query()->create([
            'title'    => $this->Footermenu->title,
            'type'     => $this->Footermenu->type,
            'url'      => $this->Footermenu->url,
            'isActive' => 1,
        ]);
        $this->resetForm();

        //Create Log
        Log::logWritter('create','منوی فوتر ایجاد شد - '.$menu->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $menus = $this->readyToLoad ? Footermenu::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        $footer = DB::connection('mysql-settings')->table('footers')->first();

        $headerMenu[] = $footer->widgetLabel1;
        $headerMenu[] = $footer->widgetLabel2;
        $headerMenu[] = $footer->widgetLabel3;
        $headerMenu[] = $footer->widgetLabel4;
        $headerMenu[] = $footer->widgetLabel5;

        return view('livewire.admin.settings.footer.menu',compact('menus','headerMenu'));
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

        //Create Log
        Log::logWritter('update','وضعیت منوی فوتر تغییر کرد - '.$menu->title);

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

        //Create Log
        Log::logWritter('delete', 'منوی فوتر حذف شد - ' . $menu->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->Footermenu->title = null;
        $this->Footermenu->type = null;
        $this->Footermenu->url = null;
    }

}
