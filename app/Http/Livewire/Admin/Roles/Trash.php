<?php

namespace App\Http\Livewire\Admin\Roles;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\Permissions\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Trash extends Component
{
    use AuthorizesRequests;

    public Role $role;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->role = new Role;
    }

    public function render()
    {
        $this->authorize('role-trash',Role::class);

        $roles = $this->readyToLoad ? Role::where('description', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(10) : [];
        return view('livewire.admin.roles.trash', compact('roles'));
    }

    public function loadRole()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('role-forceDelete',Role::class);

        $role = Role::withTrashed()->findOrFail($this->deleteId);
        $role->permissions()->detach();
        $role->forceDelete();

        //Create Log
        Log::logWritter('delete', 'نقش کاربری برای همیشه حذف شد - ' . $role->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function restore($id)
    {
        $this->authorize('role-restore',Role::class);

        $role = Role::withTrashed()->findOrFail($id);
        $role->restore();

        //Create Log
        Log::logWritter('restore', 'نقش کاربری بازیابی شد - ' . $role->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }

}
