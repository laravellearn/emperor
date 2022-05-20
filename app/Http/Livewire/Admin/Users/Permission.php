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
    public $user;
    public $readyToLoad = false;
    public $roles;
    public $permissions;

    protected $rules = [
        'roles'    => 'nullable',
        'permissions'     => 'nullable',
    ];

    public function mount()
    {
    }

    public function UserPermissionForm()
    {
        $this->authorize('user-permission', User::class);

        $this->validate();
        $user = User::findOrFail($this->user);

        //TODO select2
        $user->permissions()->sync($this->permissions);
        $user->roles()->sync($this->roles);
        //Create Log
        Log::logWritter('update', 'سطح دسترسی کاربر ویرایش شد - ' . $user->name);

        $this->emit('toast', 'success', 'با موفقیت ویرایش شد');
    }

    public function render()
    {
        $this->authorize('user-permission', User::class);

        // $role = $this->role;
        // $permission = $this->permission;
        $user = $this->user;
        $user = User::findOrFail($user);
        $userRole = $user->roles()->pluck('id')->toArray();
        $userPermission = $user->permissions()->pluck('id')->toArray();

        $roles = Roles::all();
        $permissions = Permissions::all();

        return view('livewire.admin.users.permission', compact('userRole', 'roles', 'userPermission', 'permissions', 'user'));
    }
}
