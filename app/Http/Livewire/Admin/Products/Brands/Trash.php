<?php

namespace App\Http\Livewire\Admin\Products\Brands;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\admin\products\Brand;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Trash extends Component
{
    use AuthorizesRequests;

    public Brand $brand;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->brand = new Brand;
    }

    public function render()
    {
        $this->authorize('product-brands-trash',Brand::class);

        $brands = $this->readyToLoad ? Brand::where('title', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(5) : [];
        return view('livewire.admin.products.brands.trash',compact('brands'));
    }

    public function loadBrand()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-brands-forceDelete',Brand::class);

        $brand = Brand::withTrashed()->findOrFail($this->deleteId);

        $brand->forceDelete();

        //Create Log
        Log::logWritter('delete', 'برند برای همیشه حذف شد - ' . $brand->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function restore($id)
    {
        $this->authorize('product-brands-restore',Brand::class);

        $brand = Brand::withTrashed()->findOrFail($id);
        $brand->restore();

        //Create Log
        Log::logWritter('restore', 'برند بازیابی شد - ' . $brand->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }
}
