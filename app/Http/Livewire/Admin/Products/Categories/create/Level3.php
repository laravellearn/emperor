<?php

namespace App\Http\Livewire\Admin\Products\Categories\Create;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\admin\products\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Level3 extends Component
{
    use AuthorizesRequests;

    public $ids,$parents,$parent_id;
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

    protected $rules = [
        'category.title'    => 'required',
        'category.slug'    => 'nullable',
        'category.description'    => 'nullable',
        'category.icon'    => 'nullable',
        'category.metaTitle'     => 'required',
        'category.metaDescription'     => 'required',
        'category.image'     => 'nullable',
        'category.isActive'     => 'nullable',
    ];

    public function CategoryForm()
    {
        $this->authorize('product-categories-create',Category::class);

        $this->validate();
        $category = $this->category->query()->create([
            'title'    => $this->category->title,
            'slug' => str_replace(' ','-',$this->category->title),
            'description'      => $this->category->description,
            'metaTitle'     => $this->category->metaTitle,
            'metaDescription'      => $this->category->metaDescription,
            'parent_id' => $this->parent_id,
            'isActive' => 1,
            'level' => 3,
        ]);
        $this->resetForm();

        //Create Log
        Log::logWritter('create','دسته بندی برای محصول ایجاد شد - '.$category->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $this->authorize('product-categories',Category::class);

        $categories = $this->readyToLoad ? Category::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        $parent = Category::where('level',2)->where('isActive',1)->get();
        return view('livewire.admin.products.categories.create.level3',compact('categories','parent'));
    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
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

    public function resetForm()
    {
        $this->category->title = null;
        $this->category->description = null;
        $this->category->metaTitle = null;
        $this->category->metaDescription = null;
        $this->parent_id = null;
    }
}
