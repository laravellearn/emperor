<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\admin\products\Category;
use App\Models\Admin\Products\Garanty;
use App\Models\Admin\products\Product;
use App\Models\City;
use App\Models\Financial;
use App\Models\Payment;
use App\Models\Price;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function vendor(User $user)
    {
        $user->update([
            'vendor-request' => 1
        ]);
        return back();
    }

    public function product()
    {
        $financial = Financial::where('status','unpaid')->where('vendor_id',Auth::id())->pluck('price')->sum();
        $financial = $financial * 80 / 100;

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

        $products = Product::where('isActive',1)->get();
        $user = Auth::user();
        $garanties = Garanty::get();

        $productsVendor = Price::where('user_id',Auth::id())->get();

        return view('livewire.home.profile.products',compact('products','user','garanties','categories','footer',
        'topLogoFooter',
        'bottomLogoFooter',
        'menus1',
        'menus2',
        'menus3',
        'menus4',
        'menus5','productsVendor','financial'));
    }

    public function productPost(Request $request)
    {
        $price = Price::create([
            'user_id' => Auth::id(),
            'product_id' => $request['product_id'],
            'garanty_id' => $request['garanty_id'],
            'price' => $request['price'],
            'number' => $request['number']
        ]);
        return back();
    }

    public function paymentsRequest()
    {
        $financial = Financial::where('status','unpaid')->where('vendor_id',Auth::id())->pluck('price')->sum();
        $financial = $financial * 80 / 100;
        Payment::create([
            'vendor_id' => Auth::id(),
            'price' => $financial,
            'status' => 'unpaid'
        ]);
        $financial = Financial::where('status','unpaid')->where('vendor_id',Auth::id())->get();
        foreach($financial as $item){
            $item->update([
                'status' => "paid"
            ]);
        }

        return back();
    }

    public function paymentsList()
    {
        $user = Auth::user();
        $financial = Financial::where('status','unpaid')->where('vendor_id',Auth::id())->pluck('price')->sum();
        $financial = $financial * 80 / 100;

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


        $payments = Payment::where('vendor_id',Auth::id())->get();
        return view('livewire.home.profile.payments',compact('payments','user','categories','footer',
        'topLogoFooter',
        'bottomLogoFooter',
        'menus1',
        'menus2',
        'menus3',
        'menus4',
        'menus5','financial'));
    }
}
