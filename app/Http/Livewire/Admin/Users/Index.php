<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Admin\Log;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

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
            ->orWhere('mobile', 'LIKE', '%' . $this->search . '%')
            ->orWhere('email', 'LIKE', '%' . $this->search . '%')
            ->orWhere('typeUser', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
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
        Log::logWritter('delete', 'کاربر حذف شد - ' . $user->name);

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

    public function changeStatusMobile($id)
    {
        $this->authorize('user-edit',User::class);

        $user = User::find($id);
        if ($user->mobile_verified_at != NULL) {
            $user->update([
                'mobile_verified_at' => NULL
            ]);
        } else {
            $user->update([
                'mobile_verified_at' => now()
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت موبایل کاربر تغییر کرد - '.$user->name);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function changeStatusEmail($id)
    {
        $this->authorize('user-edit',User::class);

        $user = User::find($id);
        if ($user->email_verified_at != NULL) {
            $user->update([
                'email_verified_at' => NULL
            ]);
        } else {
            $user->update([
                'email_verified_at' => now()
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت موبایل کاربر تغییر کرد - '.$user->name);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function loginForce($id)
    {
        Auth::logout();
        Auth::loginUsingId($id);
        return to_route('home');
    }

}
