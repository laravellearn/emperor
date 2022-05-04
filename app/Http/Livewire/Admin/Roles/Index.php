<?php

namespace App\Http\Livewire\Admin\Roles;

use App\Models\Admin\Permissions\Role;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;

class Index extends Component
{

    public Role $role;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $permissions;

    public function mount()
    {
        $this->role = new Role;
    }

    protected $rules = [
        'role.title'    => 'required',
        'role.description'     => 'required',
    ];

    public function RoleForm()
    {
        $this->validate();
        $role = $this->role->query()->create([
            'title'    => $this->role->title,
            'description'     => $this->role->description,
        ]);
        $role->permissions()->sync($this->permissions);

        $this->resetForm();

        //Create Log
        Log::logWritter('create', 'نقش جدید ایجاد شد - ' . $role->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $roles = $this->readyToLoad ? Role::where('title', 'LIKE', '%' . $this->search . '%')
        ->orWhere('description', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.roles.index', compact('roles'));
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
        $role = Role::find($this->deleteId);
        $role->delete();

        //Create Log
        Log::logWritter('delete', 'نقش کاربری حذف شد - ' . $role->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->role->title = null;
        $this->role->description = null;
        $this->permissions = null;
    }
}
