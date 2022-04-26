<?php

namespace App\Http\Livewire\Admin\Home;

use App\Models\Admin\Log;
use Livewire\Component;

class Index extends Component
{
    public $readyToLoad = false;

    public function loadLogs()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $logs = $this->readyToLoad ? Log::latest()->take(5)->get() : [];

        return view('livewire.admin.home.index',compact('logs'));
    }
}
