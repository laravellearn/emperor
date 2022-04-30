<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Component
{
    public $user, $token, $code, $password, $password_confirmation;

    protected $rules = [
        'password'    => 'required|min:8|confirmed',
    ];

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
    }

    public function PasswordChange()
    {
        //TODO
        //bug for change password
        $this->validate();
        $this->user->update([
            'password' => Hash::make($this->password),
        ]);
        Auth::loginUsingId($this->user->id);
        return to_route('admin.home');

    }

    public function render()
    {
        return view('livewire.home.users.change-password')->layout('layouts.auth');
    }
}
