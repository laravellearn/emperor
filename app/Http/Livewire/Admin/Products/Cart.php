<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Cart as ModelsCart;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Cart extends Component
{
    use AuthorizesRequests;

    public $ids;
    public ModelsCart $cart;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->cart = new ModelsCart;
    }

    public function render()
    {
        $this->authorize('carts',ModelsCart::class);

        $carts = $this->readyToLoad ? ModelsCart::where('id', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.products.cart',compact('carts'));
    }

    public function loadCart()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('carts',ModelsCart::class);

        $cart = ModelsCart::find($this->deleteId);
        $cart->delete();

        //Create Log
        Log::logWritter('delete', 'سبد خرید حذف شد - ' . $cart->id);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

}
