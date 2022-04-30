<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Home\Token;

class ChangePassword extends Component
{
    public $user, $token, $code, $password, $password_confirmation;

    protected $rules = [
        'password'    => 'required|min:8|confirmed',
    ];

    public function mount($code)
    {
        $this->token = Token::where('code',$code)->first();
        $this->user = User::where('id',$this->token->user_id)->first();
    }

    public function PasswordChange()
    {
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
