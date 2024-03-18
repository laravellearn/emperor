<?php

namespace App\Http\Livewire\Admin\Products\Attributes;

use App\Models\Admin\Log;
use App\Models\Admin\products\Attribute;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use AuthorizesRequests;

    public $ids;
    public Attribute $attribute;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->attribute = new Attribute;
    }

    protected $rules = [
        'attribute.title'    => 'required',
        'attribute.isActive'     => 'nullable',
        'attribute.isFilter'     => 'nullable',
    ];

    public function AttributeForm()
    {
        $this->authorize('product-attributes-create',Attribute::class);

        $this->validate();
        $attribute = $this->attribute->query()->create([
            'title'    => $this->attribute->title,
            'isFilter' => $this->attribute->isFilter,
            'isActive' => 1,
        ]);

        $this->resetForm();

        //Create Log
        Log::logWritter('create','ویژگی برای محصول ایجاد شد - '.$attribute->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $this->authorize('product-attributes',Attribute::class);

        $attributes = $this->readyToLoad ? Attribute::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.products.attributes.index',compact('attributes'));
    }

    public function loadAttribute()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $this->authorize('product-attributes-edit',Attribute::class);

        $attribute = Attribute::find($id);
        if ($attribute->isActive == 1) {
            $attribute->update([
                'isActive' => 0
            ]);
        } else {
            $attribute->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت ویژگی تغییر کرد - '.$attribute->title);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function changeFilter($id)
    {
        $this->authorize('product-attributes-edit',Attribute::class);

        $attribute = Attribute::find($id);
        if ($attribute->isFilter == 1) {
            $attribute->update([
                'isFilter' => 0
            ]);
        } else {
            $attribute->update([
                'isFilter' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت فیلتر ویژگی تغییر کرد - '.$attribute->title);

        $this->emit('toast', 'success', 'وضعیت فیلتر رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-attributes-delete',Attribute::class);

        $attribute = Attribute::find($this->deleteId);
        $attribute->delete();

        //Create Log
        Log::logWritter('delete', 'ویژگی محصول حذف شد - ' . $attribute->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->attribute->title = null;
        $this->attribute->isFilter = null;
    }
}
