<?php

namespace App\Http\Livewire\Admin\Products\Brands;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\products\Brand;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Edit extends Component
{
    use AuthorizesRequests;

    public Brand $brand;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'brand.title'    => 'required',
        'brand.slug'    => 'nullable',
        'brand.isActive'     => 'nullable',
    ];

    public function BrandForm()
    {
        $this->authorize('product-brands-edit',Brand::class);

        $this->validate();
        $this->brand->update($this->validate());


        //Create Log
        Log::logWritter('update', 'برند ویرایش شد - ' . $this->brand->title );

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
    }

    public function changeStatus($id)
    {
        $this->authorize('product-brands-edit',Brand::class);

        $brand = Brand::find($id);
        if ($brand->isActive == 1) {
            $brand->update([
                'isActive' => 0
            ]);
        } else {
            $brand->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت برند تغییر کرد - '.$brand->title);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-brands-delete',Brand::class);

        $brand = Brand::find($this->deleteId);
        $brand->delete();

        //Create Log
        Log::logWritter('delete', 'برند حذف شد - ' . $brand->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function loadBrand()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $this->authorize('product-brands-edit',Brand::class);

        $brands = $this->readyToLoad ? Brand::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        $brand = $this->brand;
        $brand->isActive == 1 ? $brand->isActive = true : $brand->isActive = false;
        return view('livewire.admin.products.brands.edit', compact('brand', 'brands'));
    }

}
