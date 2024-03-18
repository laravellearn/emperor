<?php

namespace App\Http\Controllers\Home\Products;

use App\Http\Controllers\Controller;
use App\Models\admin\products\Category;
use App\Models\Admin\products\Image;
use App\Models\Admin\products\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function single($slug)
    {
        $product = Product::where('slug',$slug)->first();
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

        $images = Image::where('product_id',$product->id)->get();
        $attributes = DB::connection('mysql-products')->table('attribute_product')->where('product_id',$product->id)->get();

        return view('livewire.home.products.single',compact('product','user','categories','footer',
        'topLogoFooter',
        'bottomLogoFooter',
        'menus1',
        'menus2',
        'menus3',
        'menus4',
        'menus5','images','attributes'));
    }
}
