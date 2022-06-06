<?php

namespace App\Http\Livewire\Admin\Products\Garanties;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\admin\products\Garanty;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Trash extends Component
{
    use AuthorizesRequests;

    public Garanty $garanty;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->garanty = new Garanty;
    }

    public function render()
    {
        $this->authorize('product-garanties-trash',Garanty::class);

        $garanties = $this->readyToLoad ? Garanty::where('title', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(5) : [];
        return view('livewire.admin.products.garanties.trash',compact('garanties'));
    }

    public function loadGaranty()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-garanties-forceDelete',Garanty::class);

        $garanty = Garanty::withTrashed()->findOrFail($this->deleteId);

        $garanty->forceDelete();

        //Create Log
        Log::logWritter('delete', 'گارانتی برای همیشه حذف شد - ' . $garanty->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function restore($id)
    {
        $this->authorize('product-garanties-restore',Garanty::class);

        $garanty = Garanty::withTrashed()->findOrFail($id);
        $garanty->restore();

        //Create Log
        Log::logWritter('restore', 'گارانتی بازیابی شد - ' . $garanty->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }
}
