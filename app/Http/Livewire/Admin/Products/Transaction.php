<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Transaction as ModelsTransaction;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Transaction extends Component
{
    use AuthorizesRequests;

    public $ids;
    public ModelsTransaction $transaction;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->transaction = new ModelsTransaction;
    }

    public function render()
    {
        $this->authorize('transactions',ModelsTransaction::class);

        $transactions = $this->readyToLoad ? ModelsTransaction::where('id', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.products.transaction',compact('transactions'));
    }

    public function loadTransaction()
    {
        $this->readyToLoad = true;
    }


}
