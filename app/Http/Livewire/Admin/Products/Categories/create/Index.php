<?php

namespace App\Http\Livewire\Admin\Products\Categories\create;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\admin\products\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    use WithFileUploads;

    public $image;
    public $ids;
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
        'category.icon'    => 'required',
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
            'icon'    => $this->category->icon,
            'metaTitle'     => $this->category->metaTitle,
            'metaDescription'      => $this->category->metaDescription,
            'isActive' => 1,
            'level' => 1,
        ]);
        if ($this->image) {
            $category->update([
                'image' => $this->uploadImage()
            ]);
        }
        $this->resetForm();

        //Create Log
        Log::logWritter('create','دسته بندی برای محصول ایجاد شد - '.$category->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "products/catagories/$year/$month";
        $name = time() . '-' . $this->image->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->image->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function render()
    {
        $this->authorize('product-categories',Category::class);

        $categories = $this->readyToLoad ? Category::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10) : [];
        return view('livewire.admin.products.categories.create.index',compact('categories'));
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
        $this->category->image = null;
        $this->category->metaTitle = null;
        $this->category->metaDescription = null;
        $this->category->icon = null;
        $this->image = null;
    }
}
