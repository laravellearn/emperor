<?php

namespace App\Http\Livewire\Admin\Products\Products;

use App\Models\Admin\Log;
use App\Models\Admin\products\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;
    public Product $product;
    public $image, $isActive, $special, $garanty_id, $tags, $colors, $level1_id, $level2_id, $level3_id, $brand_id;

    protected $rules = [
        'product.title'    => 'required',
        'product.slug'     => 'required',
        'product.description'     => 'required',
        'product.body'     => 'required',
        'product.image'     => 'nullable',
        'product.price'     => 'required',
        'product.discountPrice'     => 'nullable',
        'product.number'     => 'required',
        'product.weight'     => 'required',
        'product.orderMax'     => 'required',
        'product.orderMin'     => 'required',
        'product.special'     => 'nullable',
        'product.isActive'     => 'nullable',
        'product.garanty_id' =>'nullable',
        'product.level1_id' =>'nullable',
        'product.level2_id' =>'nullable',
        'product.level3_id' =>'nullable',
        'product.isActive' =>'nullable',
        'product.special' =>'nullable',
        'product.brand_id' =>'nullable'
    ];

    public function ProductEditForm()
    {
        $this->authorize('products-edit',Product::class);

        $this->validate();

        $this->product->query()->update([
            'title'    => $this->product->title,
            'slug'    => $this->product->slug,
            'level1_id'    => $this->product->level1_id,
            'level2_id'    => $this->product->level2_id,
            'level3_id'    => $this->product->level3_id,
            'brand_id'    => $this->product->brand_id,
            'garanty_id'    => $this->product->garanty_id,
            'description'    => $this->product->description,
            'body'    => $this->product->body,
            'price'    => $this->product->price,
            'discountPrice'    => $this->product->discountPrice,
            'number'    => $this->product->number,
            'weight'    => $this->product->weight,
            'orderMax'    => $this->product->orderMax,
            'orderMin'    => $this->product->orderMin,
            'isActive'    => $this->product->isActive,
            'special'    => $this->product->special
        ]);

        $this->product->tags()->sync($this->tags);
        $this->product->colors()->sync($this->colors);

        if ($this->image) {
            $image = $this->uploadImage();
            $this->product->update([
                'image' => $image
            ]);
        }

        //Create Log
        Log::logWritter('update', 'محصول ویرایش شد - ' . $this->product->title );

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "products/$year/$month";
        $name = time() . '-' . $this->image->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->image->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function render()
    {
        $this->authorize('products-edit',Product::class);

        $product = $this->product;
        return view('livewire.admin.products.products.edit', compact('product'));
    }

}
