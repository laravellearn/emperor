<?php

namespace App\Http\Livewire\Admin\Products\Garanties;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\products\Garanty;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    public $ids;
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

    protected $rules = [
        'garanty.title'    => 'required',
        'garanty.isActive'     => 'nullable',
    ];

    public function GarantyForm()
    {
        $this->authorize('product-garanties-create',Garanty::class);

        $this->validate();
        $garanty = $this->garanty->query()->create([
            'title'    => $this->garanty->title,
            'isActive' => 1,
        ]);

        $this->resetForm();

        //Create Log
        Log::logWritter('create','گارانتی برای محصول ایجاد شد - '.$garanty->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $this->authorize('product-garanties',Garanty::class);

        $garanties = $this->readyToLoad ? Garanty::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.products.garanties.index',compact('garanties'));
    }

    public function loadGaranty()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $this->authorize('product-garanties-edit',Garanty::class);

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
        $this->authorize('product-garanties-delete',Garanty::class);

        $garanty = Garanty::find($this->deleteId);
        $garanty->delete();

        //Create Log
        Log::logWritter('delete', 'گارانتی حذف شد - ' . $garanty->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->garanty->title = null;
    }
}
