<?php

namespace App\Http\Livewire\Admin\Products\Brands;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\products\Brand;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    public $ids;
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

    protected $rules = [
        'brand.title'    => 'required',
        'brand.slug' => 'nullable',
        'brand.isActive'     => 'nullable',
    ];

    public function BrandForm()
    {
        $this->authorize('product-brands-create',Brand::class);

        $this->validate();
        $brand = $this->brand->query()->create([
            'title'    => $this->brand->title,
            'slug' => str_replace(' ','-',$this->brand->title),
            'isActive' => 1,
        ]);

        $this->resetForm();

        //Create Log
        Log::logWritter('create','برند برای محصول ایجاد شد - '.$brand->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $this->authorize('product-brands',Brand::class);

        $brands = $this->readyToLoad ? Brand::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.products.brands.index',compact('brands'));
    }

    public function loadBrand()
    {
        $this->readyToLoad = true;
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
        Log::logWritter('delete', 'دسته محصول حذف شد - ' . $brand->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->brand->title = null;
    }
}
