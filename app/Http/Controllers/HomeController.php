<?php

namespace App\Http\Controllers;

use App\Models\admin\products\Category;
use App\Models\Admin\products\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $offProducts = Product::all();
        $user = Auth::user();

        $categories = Category::where('isActive', 1)->where('level', 1)->get();
        $footer = DB::connection('mysql-settings')->table('footers')->get();

        $bannerTop = DB::connection('mysql-settings')->table('sliders')->where('position', 'bannerTop')->first();
        $sliderMain = DB::connection('mysql-settings')->table('sliders')->where('position', 'sliderMain')->get();
        $bannerLeftTop = DB::connection('mysql-settings')->table('sliders')->where('position', 'bannerLeftTop')->limit(2)->get();
        $banner4 = DB::connection('mysql-settings')->table('sliders')->where('position', 'banner4')->limit(4)->get();
        $banner2 = DB::connection('mysql-settings')->table('sliders')->where('position', 'banner2')->limit(2)->get();

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

        return view('livewire.home.home.index', compact(
            'offProducts',
            'user',
            'categories',
            'footer',
            'topLogoFooter',
            'bottomLogoFooter',
            'menus1',
            'menus2',
            'menus3',
            'menus4',
            'menus5',
            'bannerTop',
            'sliderMain',
            'bannerLeftTop',
            'banner4',
            'banner2'
        ));
    }

    public function logout()
    {
        Auth::logout();
        return to_route('home');
    }

    public function search(Request $request)
    {
        $user = Auth::user();

        $categories = Category::where('isActive', 1)->where('level', 1)->get();
        $footer = DB::connection('mysql-settings')->table('footers')->get();

        $bannerTop = DB::connection('mysql-settings')->table('sliders')->where('position', 'bannerTop')->first();
        $sliderMain = DB::connection('mysql-settings')->table('sliders')->where('position', 'sliderMain')->get();
        $bannerLeftTop = DB::connection('mysql-settings')->table('sliders')->where('position', 'bannerLeftTop')->limit(2)->get();
        $banner4 = DB::connection('mysql-settings')->table('sliders')->where('position', 'banner4')->limit(4)->get();
        $banner2 = DB::connection('mysql-settings')->table('sliders')->where('position', 'banner2')->limit(2)->get();

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


        $title = $request['title'];
        $search = Product::where('title','like',"%{$title}%")->get();
        return view("livewire.home.products.search",compact("search",
        'user',
        'categories',
        'footer',
        'topLogoFooter',
        'bottomLogoFooter',
        'menus1',
        'menus2',
        'menus3',
        'menus4',
        'menus5',
        'bannerTop',
        'sliderMain',
        'bannerLeftTop',
        'banner4',
        'banner2'));
    }
}
