<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{

    public User $user;
    public $mobile, $password;

    public function mount()
    {
        $this->user = new User;
    }

    protected $rules = [
        'mobile'    => 'required|ir_mobile',
        'password'    => 'required',
    ];

    public function __construct()
    {
    }
    public function LoginForm()
    {
        $this->validate();
        $user = User::where('mobile', $this->mobile)->first();

        if (isset($user)) {
            if ($user->mobile_verified_at == null) {
                //TODO
                dd('Not verified');
            }

            if (Hash::check($this->password, $user->password)) {
                Auth::loginUsingId($user->id);
                //TODO
                return to_route('admin.home');
            } else {

                dd('wrong password');
            }
        } else {

            dd('not Exist');
        }
    }

    public function render()
    {

        return view('livewire.home.users.login')->layout('layouts.auth');

    }
}
