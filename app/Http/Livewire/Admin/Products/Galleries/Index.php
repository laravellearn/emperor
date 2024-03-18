<?php

namespace App\Http\Livewire\Admin\Products\Galleries;

use App\Models\Admin\Log;
use App\Models\Admin\products\Image;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use AuthorizesRequests;

    public $ids;
    public Image $image;
    public $readyToLoad = false;
    public $search;
    use WithFileUploads;
    public $picture,$product;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->image = new Image;
    }

    public function ImageForm()
    {
        $this->authorize('product-galleries', Inage::class);
        $image = $this->image->query()->create([
            'product_id'    => $this->product,
        ]);

        if ($this->picture) {
            $picture = $this->uploadImage();
            $image->update([
                'image' => $picture
            ]);
        }

        $this->resetForm();

        //Create Log
        Log::logWritter('create', 'تصویر برای گالری محصول ایجاد شد - ' . $image->product->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "galleries/$year/$month";
        $name = time() . '-' . $this->picture->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->picture->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function render()
    {
        $this->authorize('product-galleries',Image::class);

        $images = $this->readyToLoad ? Image::where('product_id', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.products.galleries.index',compact('images'));
    }

    public function loadImage()
    {
        $this->readyToLoad = true;
    }


    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-galleries-delete',Product::class);

        $image = Image::find($this->deleteId);
        $image->delete();

        //Create Log
        Log::logWritter('delete', 'یک تصویر از گالری محصول حذف شد - ' . $image->product->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->product = null;
    }
}
