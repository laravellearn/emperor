<?php

namespace App\Http\Livewire\Admin\Products\Categories\Edit;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\admin\products\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Level2 extends Component
{
    use AuthorizesRequests;

    public Category $category;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'category.title'    => 'required',
        'category.slug'    => 'nullable',
        'category.description'    => 'nullable',
        'category.metaTitle'     => 'required',
        'category.metaDescription'     => 'required',
        'category.isActive'     => 'nullable',
    ];

    public function CategoryForm()
    {
        $this->authorize('product-categories-edit',CAtegory::class);

        $this->validate();
        $this->category->update($this->validate());

        //Create Log
        Log::logWritter('update', 'دسته محصول ویرایش شد - ' . $this->category->title );

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
    }

    public function changeStatus($id)
    {
        $this->authorize('product-categories-edit',Category::class);

        $category = Category::find($id);
        if ($category->isActive == 1) {
            $category->update([
                'isActive' => 0
            ]);
        } else {
            $category->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت دسته محصول تغییر کرد - '.$category->title);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-categories-delete',Category::class);

        $category = Category::find($this->deleteId);
        $category->delete();

        //Create Log
        Log::logWritter('delete', 'دسته محصول حذف شد - ' . $category->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $this->authorize('product-categories-edit',Category::class);

        $categories = $this->readyToLoad ? Category::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];

        $category = $this->category;
        $category->isActive == 1 ? $category->isActive = true : $category->isActive = false;
        $parent = Category::where('level',1)->where('isActive',1)->get();

        return view('livewire.admin.products.categories.edit.level2', compact('category', 'categories','parent'));
    }
}
