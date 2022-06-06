<?php

namespace App\Http\Livewire\Admin\Products\Garanties;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\products\Garanty;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Edit extends Component
{
    use AuthorizesRequests;

    public Garanty $garanty;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'garanty.title'    => 'required',
        'garanty.isActive'     => 'nullable',
    ];

    public function GarantyForm()
    {
        $this->authorize('product-garanties-edit',Garanty::class);

        $this->validate();
        $this->garanty->update($this->validate());


        //Create Log
        Log::logWritter('update', 'گارانتی ویرایش شد - ' . $this->garanty->title );

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
    }

    public function changeStatus($id)
    {
        $this->authorize('product-garanties-edit',Brand::class);

        $garanty = Garanty::find($id);
        if ($garanty->isActive == 1) {
            $garanty->update([
                'isActive' => 0
            ]);
        } else {
            $garanty->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت گارانتی تغییر کرد - '.$garanty->title);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-garanties-delete',Brand::class);

        $garanty = Garanty::find($this->deleteId);
        $garanty->delete();

        //Create Log
        Log::logWritter('delete', 'گارانتی حذف شد - ' . $garanty->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function loadGaranty()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $this->authorize('product-garanties-edit',Garanty::class);

        $garanties = $this->readyToLoad ? Garanty::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        $garanty = $this->garanty;
        $garanty->isActive == 1 ? $garanty->isActive = true : $garanty->isActive = false;
        return view('livewire.admin.products.garanties.edit', compact('garanty', 'garanties'));
    }
}
