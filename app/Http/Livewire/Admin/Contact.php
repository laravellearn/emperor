<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Contact as ModelsContact;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Contact extends Component
{
    use AuthorizesRequests;

    public $ids;
    public ModelsContact $contact;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->contact = new ModelsContact;
    }

    public function render()
    {
        $this->authorize('contacts',ModelsContact::class);

        $contacts = $this->readyToLoad ? ModelsContact::where('id', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.contact',compact('contacts'));
    }

    public function loadContact()
    {
        $this->readyToLoad = true;
    }
}
