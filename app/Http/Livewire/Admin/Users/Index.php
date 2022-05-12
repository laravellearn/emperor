<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    public User $user;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->user = new User;
    }

    public function render()
    {
        $this->authorize('users',User::class);

        $users = $this->readyToLoad ? User::where('name', 'LIKE', '%' . $this->search . '%')
            ->where('mobile', 'LIKE', '%' . $this->search . '%')
            ->where('email', 'LIKE', '%' . $this->search . '%')
            ->where('typeUser', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.users.index',compact('users'));
    }

    public function loadUser()
    {
        $this->readyToLoad = true;
    }
}
