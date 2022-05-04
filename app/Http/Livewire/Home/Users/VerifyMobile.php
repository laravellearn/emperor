<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Home\Token;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Log;

class VerifyMobile extends Component
{
    public $user,$token,$code;

    protected $rules = [
        'code'    => 'required',
    ];

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->token = Token::where('user_id', $id)->latest()->first();
    }

    public function verifyCode()
    {
        $this->validate();
        if ($this->token->code == $this->code) {
            if ($this->token->expired_at > Carbon::now()) {
                $this->user->update([
                    'mobile_verified_at' => now()
                ]);

                Auth::loginUsingId($this->user->id);
                Log::logWritter('verifyCode', 'موبایل کاربر تائید شد - ' . $this->user->name);

                //TODO
                //Role detect
                return to_route('admin.home');
            } else {
                //TODO
                //show button repeat send sms
                $this->emit('toast', 'error', 'کد تائید منقضی شده است' . "<br/>" . 'بر روی دکمه ارسال مجدد کلیک کنید.');
            }
        } else {
            $this->emit('toast', 'error', 'کد تائیدیه اشتباه است!');
        }
    }

    public function resendSms($id)
    {
        $user = User::find($id);
        $code = random_int(1000, 9999);
        Token::tokenCreate($user->id, $code, 'verify');
        User::sendSms($code, $user->mobile);
        Log::logWritter('resendSms', 'کد برای کاربر مجدد پیامک شد - ' . $user->name . ' کد تائید: ' . $code);
        return $this->redirect(request()->header('Referer'));
    }

    public function render()
    {
        $user = $this->user;
        return view('livewire.home.users.verify-mobile', compact('user'))->layout('layouts.auth');
    }
}
