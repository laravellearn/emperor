<?php

namespace App\Http\Livewire\Home\Layouts;

use App\Models\admin\products\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{

    public function logout()
    {
        Auth::logout();
        return to_route('home');

    }

    public function render()
    {
        $user = Auth::user();
        $categories = Category::where('isActive',1)->where('level',1)->get();
        return view('livewire.home.layouts.header',compact('user','categories'))->layout('home');
    }
}
