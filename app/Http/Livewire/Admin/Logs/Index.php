<?php

namespace App\Http\Livewire\Admin\Logs;

use App\Models\Admin\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

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
        $logs = $this->readyToLoad ? Log::where('actionType', 'LIKE', '%' . $this->search . '%')->latest()->paginate(15) : [];
        return view('livewire.admin.logs.index',compact('logs'));
    }

    public function loadLog()
    {
        $this->readyToLoad = true;
    }


}
