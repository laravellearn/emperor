<?php

namespace App\Http\Livewire\Home\Users;

use App\Models\Admin\Log;
use App\Models\Home\Token;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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

    public function LoginForm()
    {
        $this->validate();
        $user = User::where('mobile', $this->mobile)->first();

        if (isset($user)) {
            if ($user->mobile_verified_at == null) {
                $code = random_int(1000, 9999);
                if (isset($user->token->expired_at)) {
                    if ($user->token->expired_at > Carbon::now()) {
                        Token::tokenCreate($user->id, $code, 'verify');
                        Log::logwrite('resendSms', 'کد برای کاربر مجدد پیامک شد - ' . $user->name . 'کد تائید: ' . $code);
                        User::sendSms($code, $user->mobile);
                    }
                } else {
                    Token::tokenCreate($user->id, $code, 'verify');
                    Log::logwrite('sendSms', 'کد برای کاربر پیامک شد - ' . $user->name . 'کد تائید: ' . $code);
                    User::sendSms($code, $user->mobile);
                }
                return to_route('verify.mobile', $user->id);
            } elseif (Hash::check($this->password, $user->password)) {
                Auth::loginUsingId($user->id);
                //TODO
                //Role Detection
                return to_route('admin.home');
            } else {
                $this->emit('toast', 'error', 'اطلاعات ورود نادرست است!');
            }
        } else {
            $this->emit('toast', 'error', 'شما در سایت ثبت نام نکرده اید!');
        }
    }

    public function render()
    {
        return view('livewire.home.users.login')->layout('layouts.auth');
    }
}
