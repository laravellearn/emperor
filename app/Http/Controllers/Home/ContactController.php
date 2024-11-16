<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\admin\products\Category;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::where('isActive',1)->where('level',1)->get();
        $footer = DB::connection('mysql-settings')->table('footers')->get();
        $footer = $footer[0];
        $topLogoFooter = DB::connection('mysql-settings')->table('footer-logos')
            ->where('isActive', 1)->where('type', 'top')->where('deleted_at', null)->get();
        $bottomLogoFooter = DB::connection('mysql-settings')->table('footer-logos')
            ->where('isActive', 1)->where('type', 'bottom')->where('deleted_at', null)->get();

        $menus1 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel1')->get();
        $menus2 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel2')->get();
        $menus3 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel3')->get();
        $menus4 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel4')->get();
        $menus5 = DB::connection('mysql-settings')->table('footer-menus')
            ->where('isActive', 1)->where('type', 'widgetLabel5')->get();


        return view('livewire.home.home.contacts',compact('user','categories','footer',
        'topLogoFooter',
        'bottomLogoFooter',
        'menus1',
        'menus2',
        'menus3',
        'menus4',
        'menus5'));
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return back();
    }
}
