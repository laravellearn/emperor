<?php

namespace App\Http\Livewire\Admin\Permissions;

use App\Models\Admin\Permissions\Permission;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Trash extends Component
{
    use AuthorizesRequests;

    public Permission $permission;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->permission = new Permission;
    }

    public function render()
    {
        $this->authorize('permission-trash',Permission::class);

        $permissions = $this->readyToLoad ? Permission::where('description', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(10) : [];
        return view('livewire.admin.permissions.trash', compact('permissions'));
    }

    public function loadPermission()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('permission-forceDelete',Permission::class);

        $permission = Permission::withTrashed()->findOrFail($this->deleteId);
        $permission->roles()->detach();
        $permission->forceDelete();

        //Create Log
        Log::logWritter('delete', 'سطح دسترسی برای همیشه حذف شد - ' . $permission->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }


    public function restore($id)
    {
        $this->authorize('permission-restore',Permission::class);

        $permission = Permission::withTrashed()->findOrFail($id);
        $permission->restore();

        //Create Log
        Log::logWritter('restore', 'سطح دسترسی بازیابی شد - ' . $permission->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }

}
