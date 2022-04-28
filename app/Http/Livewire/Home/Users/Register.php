<?php

namespace App\Http\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    public User $user;
    public $name,$mobile,$password,$password_confirmation;

    public function mount()
    {
        $this->user = new User;
    }

    protected $rules = [
        'name'    => 'required|min:5',
        'mobile'    => 'required|ir_mobile|unique:mysql.users',
        'password'    => 'required|min:8|confirmed',
    ];

    public function RegisterForm()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'mobile' => $$this->mobile,
            'password' => Hash::make($this->password),
        ]);
        
        dd($this->name);
    }

    public function render()
    {
        return view('livewire.home.users.register')->layout('layouts.auth');
    }
}
