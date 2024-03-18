<?php

namespace App\Http\Livewire\Admin\Products\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\admin\products\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Trash extends Component
{
    use AuthorizesRequests;

    public Product $product;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->product = new Product;
    }

    public function render()
    {
        $this->authorize('products-trash',Product::class);

        $products = $this->readyToLoad ? Product::where('title', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(10) : [];
        return view('livewire.admin.products.products.trash',compact('products'));

    }

    public function loadProduct()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('products-forceDelete',Product::class);

        $product = Product::withTrashed()->findOrFail($this->deleteId);

        $product->forceDelete();

        //Create Log
        Log::logWritter('delete', 'محصول برای همیشه حذف شد - ' . $product->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت حذف شد');
    }

    public function restore($id)
    {
        $this->authorize('products-restore',Product::class);

        $product = Product::withTrashed()->findOrFail($id);
        $product->restore();

        //Create Log
        Log::logWritter('restore', 'محصول بازیابی شد - ' . $product->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }


}
