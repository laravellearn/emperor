<?php

namespace App\Http\Livewire\Admin\Logs;

use App\Models\Admin\Log;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    public Log $log;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->log = new Log;
    }

    public function render()
    {
        $this->authorize('logs',Log::class);

        $logs = $this->readyToLoad ? Log::where('description', 'LIKE', '%' . $this->search . '%')->latest()->paginate(15) : [];
        return view('livewire.admin.logs.index',compact('logs'));
    }

    public function loadLog()
    {
        $this->readyToLoad = true;
    }


}
