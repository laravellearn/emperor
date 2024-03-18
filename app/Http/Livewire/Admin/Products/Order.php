<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Order as ModelsOrder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Order extends Component
{
    use AuthorizesRequests;

    public $ids;
    public ModelsOrder $order;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->order = new ModelsOrder;
    }

    public function render()
    {
        $this->authorize('orders',ModelsOrder::class);

        $orders = $this->readyToLoad ? ModelsOrder::where('id', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.products.order',compact('orders'));
    }

    public function loadOrder()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $this->authorize('orders',ModelsOrder::class);

        $order = ModelsOrder::find($id);
        if ($order->isActive == 1) {
            $order->update([
                'isActive' => 0
            ]);
        } else {
            $order->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت سفارش تغییر کرد - '.$order->id);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('orders',ModelsOrder::class);

        $order = ModelsOrder::find($this->deleteId);
        $order->delete();

        //Create Log
        Log::logWritter('delete', 'سفارش حذف شد - ' . $order->id);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }
}
