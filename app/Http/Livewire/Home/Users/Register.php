<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Home\Token;
use Carbon\Carbon;

class Register extends Component
{

    public User $user;
    public $name, $mobile, $password, $password_confirmation;

    public function mount()
    {
        $this->user = new User;
    }

    protected $rules = [
        'name'    => 'required|min:5',
        'mobile'    => 'required|ir_mobile',
        'password'    => 'required|min:8|confirmed',
    ];

    public function RegisterForm()
    {
        $this->validate();
        $code = random_int(1000, 9999);
        $userExist = User::where('mobile', $this->mobile)->first();
        if ($userExist && $userExist->mobile_verified_at == null) {
            Token::create([
                'user_id' => $userExist->id,
                'code' => $code,
                'type' => 'verify',
                'expired_at' => Carbon::now()->addMinutes(3)
            ]);

            //TODO
            // User::sendSms($code, $user->mobile);
            return to_route('verify.mobile', $userExist->id);
        } elseif ($userExist && $userExist->mobile_verified_at != null) {
            $this->emit('toast', 'error', 'این کاربر از قبل ثبت نام کرده است!');
        } else {
            $user = User::create([
                'name' => $this->name,
                'mobile' => $this->mobile,
                'password' => Hash::make($this->password),
            ]);
            Token::create([
                'user_id' => $user->id,
                'code' => $code,
                'type' => 'verify',
                'expired_at' => Carbon::now()->addMinutes(3)
            ]);
            //TODO
            // User::sendSms($code, $user->mobile);

            return to_route('verify.mobile', $user->id);
        }
    }

    public function render()
    {
        return view('livewire.home.users.register')->layout('layouts.auth');
    }
}
