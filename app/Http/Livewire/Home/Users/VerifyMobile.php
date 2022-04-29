<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Home\Token;

class VerifyMobile extends Component
{
    public $user;
    public $code;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->code = Token::where('user_id',$id)->latest()->first();
    }

    public function render()
    {
        $user = $this->user;
        return view('livewire.home.users.verify-mobile',compact('user'))->layout('layouts.auth');
    }
}
