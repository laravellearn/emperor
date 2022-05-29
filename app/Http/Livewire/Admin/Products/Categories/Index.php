<?php

namespace App\Http\Livewire\Admin\Products\Categories;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\products\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    public Category $category;
    public $image;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->category = new Category();
    }

    protected $rules = [
        'category.title'    => 'required|min:4',
        'category.description'     => 'nullable',
        'category.icon'    => 'nullable',
        'category.image'     => 'nullable',
        'category.slug'    => 'required|unique',
        'category.metaTitle'     => 'required|max:60',
        'category.metaDescription'    => 'required|max:160',
    ];

    public function CategoriesProductForm()
    {
        $this->authorize('product-categories-create',Category::class);

        $this->validate();
        $category = $this->category->query()->create([
            'title'    => $this->category->title,
            'description'     => $this->category->description,
            'icon'    => $this->category->icon,
            'slug'    => $this->category->slug,
            'metaTitle'     => $this->category->metaTitle,
            'metaDescription'    => $this->category->metaDescription,
        ]);
        if ($this->image) {
            $category->update([
                'image' => $this->uploadImage()
            ]);
        }

        $this->resetForm();

        //Create Log
        Log::logWritter('create', 'دسته بندی جدید برای محصولات ایجاد شد - ' . $category->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $this->authorize('product-categories',Category::class);

        $categories = $this->readyToLoad ? Category::where('title', 'LIKE', '%' . $this->search . '%')
        ->orWhere('description', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.products.categories.index',compact('categories'));
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "product/category/$year/$month";
        $name = time() . '-' . $this->image->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->image->storeAs($directory, $name);
        return "/$directory/$name";
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
        $this->authorize('product-categories-delete',Category::class);

        $category = Category::find($this->deleteId);
        $category->delete();

        //Create Log
        Log::logWritter('delete', 'دسته بندی برای محصول حذف شد - ' . $category->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->category->title = null;
        $this->category->description = null;
        $this->category->icon = null;
        $this->category->slug = null;
        $this->category->metaTitle = null;
        $this->category->metaDescription = null;
    }
}
