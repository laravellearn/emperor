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
                $code = random_int(1000,9999);
                Token::create([
                    'user_id' => $user->id,
                    'code' => $code,
                    'type' => 'register',
                    'expired_at' => Carbon::now()->addMinutes(3)
                ]);
                // Log::logWritter('sendSms','یک پیامک ارسال شد - '.$user->name);

                return to_route('verify.mobile',[$user->id,$code]);
            }

            if (Hash::check($this->password, $user->password)) {
                Auth::loginUsingId($user->id);
                //TODO
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
