<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Admin\Log;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Vendor extends Component
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
        return view('livewire.admin.users.vendor',compact('users'));
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
        $user->update([
            'vendor-request' => 0
        ]);

        //Create Log
        Log::logWritter('delete', 'درخواست فروشندگی کاربر حذف شد - ' . $user->name);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function changeStatus($id)
    {
        $this->authorize('user-edit',User::class);

        $user = User::find($id);
            $user->update([
                'vendorRequest' => 0,
                'typeUser' => "vendor"
            ]);


        //Create Log
        Log::logWritter('update','مشتری به فروشنده تغییر کرد - '.$user->name);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }


}
