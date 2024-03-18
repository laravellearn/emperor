<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getCities($id)
    {
        $city_id = City::where('is_active',1)->where('province_id',$id)->get();
        return response()->json($city_id);
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        Address::create($request->all());
        return back();
    }
}
