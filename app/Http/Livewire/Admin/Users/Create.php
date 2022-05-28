<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use App\Models\Admin\Log;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class Create extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;
    public User $user;
    public $profilePhoto;
    public $password,$isActive,$email_verified_at,$mobile_verified_at;

    public function mount()
    {
        $this->user = new User;
    }

    protected $rules = [
        'user.name'    => 'required',
        'user.mobile'     => 'required',
        'user.email'     => 'nullable|email',
        'user.typeUser'     => 'required',
    ];

    public function UserForm()
    {
        $this->authorize('user-create', User::class);
        $this->validate();
        $user = $this->user->query()->create([
            'name'    => $this->user->name,
            'mobile'     => $this->user->mobile,
            'email'     => $this->user->email,
            'password'     => Hash::make($this->password),
            'typeUser'     => $this->user->typeUser,
        ]);
        if ($this->profilePhoto) {
            $profilePhoto = $this->uploadImage();
            $user->update([
                'profilePhoto' => $profilePhoto
            ]);
        }

        if ($this->isActive) {
            $user->update([
                'isActive' => 1
            ]);
        }
        if ($this->mobile_verified_at) {
            $user->update([
                'mobile_verified_at' => now()
            ]);
        }
        if ($this->email_verified_at) {
            $user->update([
                'email_verified_at' => now()
            ]);
        }

        $this->resetForm();

        //Create Log
        Log::logWritter('create', 'کاربر جدید ایجاد شد - ' . $user->name);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "profile/$year/$month";
        $name = time() . '-' . $this->profilePhoto->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->profilePhoto->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function render()
    {
        $this->authorize('user-create', User::class);

        return view('livewire.admin.users.create');
    }

    public function resetForm()
    {
        $this->user->name = null;
        $this->user->mobile = null;
        $this->user->email = null;
        $this->password = null;
        $this->user->typeUser = null;
    }
}
