<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Admin\Log;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Hash;

class Edit extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;
    public $image;
    public User $user;
    public $password;
    public $profilePhoto;


    protected $rules = [
        'user.name'    => 'required',
        'user.mobile'     => 'required',
        'user.email'     => 'nullable',
        'user.typeUser'     => 'nullable',
        'user.profilePhoto'     => 'nullable',
    ];

    public function UserForm()
    {
        $this->authorize('user-edit',User::class);

        $this->validate();
        $this->user->update($this->validate());
        //update Password
        if($this->password != NULL){
            $this->user->update([
                'password' => Hash::make($this->password)
            ]);
        }
        if ($this->profilePhoto) {
            $profilePhoto = $this->uploadImage();
            $this->user->update([
                'profilePhoto' => $profilePhoto
            ]);
        }

        //Create Log
        Log::logWritter('update', 'کاربر ویرایش شد - ' . $this->user->name );

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
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
        $this->authorize('user-edit',User::class);

        $user = $this->user;
        return view('livewire.admin.users.edit', compact('user'));
    }

}
