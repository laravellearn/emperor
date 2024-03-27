<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Price as ModelsPrice;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Price extends Component
{
    use AuthorizesRequests;

    public $ids;
    public ModelsPrice $price;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->price = new ModelsPrice;
    }


    public function render()
    {
        $this->authorize('product-prices',ModelsPrice::class);

        $prices = $this->readyToLoad ? ModelsPrice::where('id', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.products.price',compact('prices'));
    }

    public function loadPrice()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $this->authorize('product-prices',ModelsPrice::class);

        $price = ModelsPrice::find($id);
        if ($price->isActive == 1) {
            $price->update([
                'isActive' => 0
            ]);
        } else {
            $price->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت محصول تغییر کرد - '.$price->id);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }


}
