<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\Province;
use App\Models\Address as addr;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Address extends Component
{
    public function render()
    {
        $user = Auth::user();
        $provinces = Province::all();
        $addresses = addr::query()->where('user_id',$user->id)->get();
        return view('livewire.home.profile.address',compact('user','provinces','addresses'))->layout('layouts.home');
    }
}
