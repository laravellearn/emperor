<?php

namespace App\Http\Livewire\Admin\Products\Categories;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\admin\products\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class Trash extends Component
{
    use AuthorizesRequests;

    public Category $category;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->category = new Category;
    }

    public function render()
    {
        $this->authorize('product-categories-trash',Category::class);

        $categories = $this->readyToLoad ? Category::where('title', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(10) : [];
        return view('livewire.admin.products.categories.trash',compact('categories'));
    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-categories-forceDelete',Category::class);

        $category = Category::withTrashed()->findOrFail($this->deleteId);
        if($category->image != null){
            Storage::delete($category->image);
        }
        $category->forceDelete();

        //Create Log
        Log::logWritter('delete', 'دسته محصول برای همیشه حذف شد - ' . $category->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function restore($id)
    {
        $this->authorize('product-categories-restore',Category::class);

        $category = Category::withTrashed()->findOrFail($id);
        $category->restore();

        //Create Log
        Log::logWritter('restore', 'دسته محصول بازیابی شد - ' . $category->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }
}
