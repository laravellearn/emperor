<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Home\Token;
use Carbon\Carbon;

class VerifyMobile extends Component
{
    public $user;
    public $code;
    public $codeVerify;

    protected $rules = [
        'codeVerify'    => 'required',
    ];

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->code = Token::where('user_id',$id)->latest()->first();
    }

    public function verifyCode()
    {
        $this->validate();
        if($this->code == $this->codeVerify)
        {
            if ($this->user->token->expired_at < Carbon::now())
            {
                //TODO
                dd('ok');
            }else
            {
                //TODO
                dd('expired_at');
            }
        }else
        {
            $this->emit('toast', 'error', 'کد تائیدیه اشتباه است!');
        }


    }

    public function render()
    {
        $user = $this->user;
        return view('livewire.home.users.verify-mobile',compact('user'))->layout('layouts.auth');
    }
}
