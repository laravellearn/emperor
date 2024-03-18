<?php

namespace App\Http\Livewire\Admin\Products\Attributes;

use App\Models\Admin\Log;
use App\Models\Admin\products\Attribute;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class Edit extends Component
{
    use AuthorizesRequests;

    public Attribute $attribute;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'attribute.title'    => 'required',
        'attribute.isFilter'    => 'nullable',
        'attribute.isActive'     => 'nullable',
    ];

    public function AttributeEditForm()
    {
        $this->authorize('product-attributes-edit',Attribute::class);

        $this->validate();
        $this->attribute->update($this->validate());


        //Create Log
        Log::logWritter('update', 'ویژگی ویرایش شد - ' . $this->attribute->title );

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
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
        Log::logWritter('delete', 'ویژگی حذف شد - ' . $attribute->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function loadAttribute()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $this->authorize('product-attributes-edit',Attribute::class);

        $attributes = $this->readyToLoad ? Attribute::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        $attribute = $this->attribute;
        $attribute->isActive == 1 ? $attribute->isActive = true : $attribute->isActive = false;
        return view('livewire.admin.products.attributes.edit', compact('attribute', 'attributes'));
    }
}
