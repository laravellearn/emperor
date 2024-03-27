<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Payment as ModelsPayment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Payment extends Component
{
    use AuthorizesRequests;

    public $ids;
    public ModelsPayment $payment;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->payment = new ModelsPayment;
    }


    public function render()
    {
        $this->authorize('payments',ModelsPayment::class);

        $payments = $this->readyToLoad ? ModelsPayment::where('id', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.products.payment',compact('payments'));
    }

    public function loadPayment()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $this->authorize('payments',ModelsPayment::class);

        $payments = ModelsPayment::find($id);
        if ($payments->status == "unpaid") {
            $payments->update([
                'status' => "paid"
            ]);
        } else {
            $payments->update([
                'status' => "unpaid"
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت تسویه حساب تغییر کرد - '.$payments->id);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

}
