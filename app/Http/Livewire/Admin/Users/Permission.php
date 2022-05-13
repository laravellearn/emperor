<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Admin\Log;
use App\Models\Admin\Permissions\Permission as Permissions;
use App\Models\Admin\Permissions\Role as Roles;
use App\Models\User;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Permission extends Component
{
    use AuthorizesRequests;

    public Roles $role;
    public Permissions $permission;
    public $readyToLoad = false;

    protected $rules = [
        'role.roles'    => 'required',
        'permission.permissions'     => 'required',
    ];

    public function PermissionForm()
    {
        $this->authorize('user-Permission',User::class);

        $this->validate();
        $this->user->update($this->validate());
        $this->user->permissions()->sync($this->permissions);
        $this->user->roles()->sync($this->roles);
        //Create Log
        Log::logWritter('update', 'سطح دسترسی کاربر ویرایش شد - ' . $this->user->name);

        $this->emit('toast', 'success', 'با موفقیت ویرایش شد');
    }

    public function render()
    {
        $this->authorize('user-permissions',User::class);

        $role = $this->role;
        $roles = $this->readyToLoad ? Role::where('title', 'LIKE', '%' . $this->search . '%')->orWhere('description', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        return view('livewire.admin.users.permission', compact('role', 'roles'));
    }

    public function loadRole()
    {
        $this->readyToLoad = true;
    }

}
