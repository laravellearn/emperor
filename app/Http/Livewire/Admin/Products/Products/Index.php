<?php

namespace App\Http\Livewire\Admin\Products\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\products\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    public $ids;
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

    protected $rules = [
        'color.title'    => 'required',
        'color.value'    => 'required',
        'color.isActive'     => 'nullable',
    ];

    public function render()
    {
        $this->authorize('products',Product::class);

        $products = $this->readyToLoad ? Product::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.products.products.index',compact('products'));
    }

    public function loadProduct()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $this->authorize('products-edit',Product::class);

        $product = Product::find($id);
        if ($product->isActive == 1) {
            $product->update([
                'isActive' => 0
            ]);
        } else {
            $product->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت محصول تغییر کرد - '.$product->title);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function changeSpecial($id)
    {
        $this->authorize('products-edit',Product::class);

        $product = Product::find($id);
        if ($product->special == 1) {
            $product->update([
                'special' => 0
            ]);
        } else {
            $product->update([
                'special' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','محصول ویژه تغییر کرد - '.$product->title);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('products-delete',Product::class);

        $product = Product::find($this->deleteId);
        $product->delete();

        //Create Log
        Log::logWritter('delete', 'محصول حذف شد - ' . $product->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

}
