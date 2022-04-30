<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Home\Token;
use App\Models\Admin\Log;

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
        $code = random_int(1000, 9999);
        $userExist = User::where('mobile', $this->mobile)->first();

        if ($userExist) {
            Token::tokenCreate($userExist->id, $code, 'verify');
            User::sendSms($code, $userExist->mobile);
            Log::logwrite('resendSms', 'کد برای کاربر پیامک شد - ' . $userExist->name . 'کد تائید: ' . $code);
            return to_route('verify.forget.password', $userExist->id);
        } else {
            $this->emit('toast', 'error', 'کاربری با این شماره موبایل ثبت نام نکرده است!');
        }
    }

    public function render()
    {
        return view('livewire.home.users.forget-password')->layout('layouts.auth');
    }
}
