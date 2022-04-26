<?php

namespace App\Http\Livewire\Home\Profile;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{

    public User $user;

    public function mount()
    {
        $this->user = new User;
    }

    protected $rules = [
        'user.emailPhone'    => 'required',
    ];

    public function userForm()
    {
        $this->validate();
        $mobile = User::where('mobile',$this->user->emailPhone)->first();
        $email = User::where('email',$this->user->emailPhone)->first();

        if($mobile)
        {

            return redirect()->route('user.token');
        }elseif($email)
        {

        }else
        {

        }


    }

    public function render()
    {
        return view('livewire.home.profile.login')->layout('layouts.login');
    }
}
