<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Admin\Log;
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

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('user-delete',User::class);

        $user = User::find($this->deleteId);
        $user->delete();

        //Create Log
        Log::logWritter('delete', 'کاربر حذف شد - ' . $user->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function changeStatus($id)
    {
        $this->authorize('user-edit',User::class);

        $user = User::find($id);
        if ($user->isActive == 1) {
            $user->update([
                'isActive' => 0
            ]);
        } else {
            $user->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت کاربر تغییر کرد - '.$user->name);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

}
