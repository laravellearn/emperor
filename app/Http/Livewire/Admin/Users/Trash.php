<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\WithPagination;
use App\Models\Admin\Log;

class Trash extends Component
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
        $this->authorize('user-trash',User::class);

        $users = $this->readyToLoad ? User::where('name', 'LIKE', '%' . $this->search . '%')
        ->where('mobile', 'LIKE', '%' . $this->search . '%')
        ->where('email', 'LIKE', '%' . $this->search . '%')
        ->where('typeUser', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(10) : [];
        return view('livewire.admin.users.trash',compact('users'));
    }

    public function loadUser()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('user-forceDelete',User::class);

        $user = User::withTrashed()->findOrFail($this->deleteId);
        $user->roles()->detach();
        $user->permissions()->detach();

        $user->forceDelete();

        //Create Log
        Log::logWritter('delete', 'کاربر برای همیشه حذف شد - ' . $user->name);

        $this->emit('toast', 'success', 'رکورد برای همیشه حذف شد');
    }

    public function restore($id)
    {
        $this->authorize('user-restore',User::class);

        $user = User::withTrashed()->findOrFail($id);
        $user->restore();

        //Create Log
        Log::logWritter('restore', 'کاربر بازیابی شد - ' . $user->name);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }
}
