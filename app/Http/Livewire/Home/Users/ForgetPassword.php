<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Home\Token;
use Carbon\Carbon;

class ForgetPassword extends Component
{
    public User $user;
    public $mobile;

    public function mount()
    {
        $this->user = new User;
    }

    protected $rules = [
        'mobile'    => 'required|ir_mobile',
    ];


    public function ForgetForm()
    {
        $this->validate();
        $code = random_int(1000,9999);
        $userExist = User::where('mobile',$this->mobile)->first();

        if($userExist)
        {
            Token::create([
                'user_id' => $userExist->id,
                'code' => $code,
                'type' => 'verify',
                'expired_at' => Carbon::now()->addMinutes(3)
            ]);
            //TODO
            // User::sendSms($code, $user->mobile);

            return to_route('verify.forget.password', $userExist->id);
        }else{
            $this->emit('toast', 'error', 'کاربری با این شماره موبایل ثبت نام نکرده است!');
        }
    }

    public function render()
    {
        return view('livewire.home.users.forget-password')->layout('layouts.auth');
    }
}
