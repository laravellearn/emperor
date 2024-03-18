<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\products\Attribute;
use App\Models\Admin\products\AttributeValues;
use App\Models\Admin\products\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $product_id = $product->id;
        $attributes = Attribute::where('isActive',1)->get();
        $values = AttributeValues::all();
        return view('livewire.admin.products.products.attributes.create',compact('product_id','attributes','values'));
    }

    public function store(Request $request, Product $product)
    {
        foreach($request->attributeProducts as $attr){
            $attribute = explode('-',$attr);
            DB::connection('mysql-products')->table('attribute_product')->insert([
                'value_id' => $attribute[0],
                'attribute_id' => $attribute[1],
                'product_id' => $product->id
            ]);
        }
        return back();
    }
}
