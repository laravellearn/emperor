<?php

namespace App\Http\Livewire\Admin\Permissions;

use App\Models\Admin\Permissions\Permission;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Edit extends Component
{
    use AuthorizesRequests;

    public Permission $permission;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $roles;

    protected $rules = [
        'permission.title'    => 'required',
        'permission.description'     => 'required',
    ];

    public function PermissionForm()
    {
        $this->authorize('permission-edit',Permission::class);

        $this->validate();
        $this->permission->update($this->validate());
        $this->permission->roles()->sync($this->roles);
        //Create Log
        Log::logWritter('update', 'سطح دسترسی ویرایش شد - ' . $this->permission->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
    }

    public function render()
    {
        $this->authorize('permissions',Permission::class);

        $permission = $this->permission;
        $permissions = $this->readyToLoad ? Permission::where('title', 'LIKE', '%' . $this->search . '%')->orWhere('description', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        return view('livewire.admin.permissions.edit',compact('permission','permissions'));
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
        $this->authorize('permission-edit',Permission::class);

        $permission = Permission::find($this->deleteId);
        $permission->delete();

        //Create Log
        Log::logWritter('delete', 'سطح دسترسی حذف شد - ' . $permission->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }
}
