<?php

namespace App\Http\Livewire\Admin\Products\Products;

use Livewire\Component;
use App\Models\Admin\Log;
use App\Models\Admin\products\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\WithFileUploads;

class Create extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;
    public Product $product;
    public $image, $isActive, $special, $garanty_id, $tags, $colors, $level1_id, $level2_id, $level3_id, $brand_id;

    public function mount()
    {
        $this->product = new Product;
    }

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
    ];

    public function ProductForm()
    {
        $this->authorize('products-create', Product::class);
        $this->validate();
        $product = $this->product->query()->create([
            'title'    => $this->product->title,
            'slug'    => $this->product->slug,
            'level1_id'    => $this->level1_id,
            'level2_id'    => $this->level2_id,
            'level3_id'    => $this->level3_id,
            'brand_id'    => $this->brand_id,
            'garanty_id'    => $this->garanty_id,
            'description'    => $this->product->description,
            'body'    => $this->product->body,
            'price'    => $this->product->price,
            'discountPrice'    => $this->product->discountPrice,
            'number'    => $this->product->number,
            'weight'    => $this->product->weight,
            'orderMax'    => $this->product->orderMax,
            'orderMin'    => $this->product->orderMin
        ]);

        $product->tags()->sync($this->tags);
        $product->colors()->sync($this->colors);

        if ($this->image) {
            $image = $this->uploadImage();
            $product->update([
                'image' => $image
            ]);
        }

        if ($this->isActive) {
            $product->update([
                'isActive' => 1
            ]);
        }

        if ($this->special) {
            $product->update([
                'special' => 1
            ]);
        }

        $this->resetForm();

        //Create Log
        Log::logWritter('create', 'محصول جدید ایجاد شد - ' . $product->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
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
        $this->authorize('products-create', Product::class);

        return view('livewire.admin.products.products.create');
    }

    public function resetForm()
    {
        $this->product->title = null;
        $this->product->slug = null;
        $this->level1_id = null;
        $this->level2_id = null;
        $this->level3_id = null;
        $this->brand_id = null;
        $this->garanty_id = null;
        $this->product->description = null;
        $this->product->body = null;
        $this->product->image = null;
        $this->product->price = null;
        $this->product->discountPrice = null;
        $this->product->number = null;
        $this->product->weight = null;
        $this->product->orderMax = null;
        $this->product->orderMin = null;
        $this->tags = null;
        $this->colors = null;
    }
}
