<?php

namespace App\Http\Livewire\Admin\Products\Attributes;

use App\Models\Admin\Log;
use App\Models\Admin\products\Attribute;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class Trash extends Component
{
    use AuthorizesRequests;

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

    public function render()
    {
        $this->authorize('product-attributes-trash',Attribute::class);

        $attributes = $this->readyToLoad ? Attribute::where('title', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(5) : [];
        return view('livewire.admin.products.attributes.trash',compact('attributes'));
    }

    public function loadAttribute()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-attributes-forceDelete',Attribute::class);

        $attribute = Attribute::withTrashed()->findOrFail($this->deleteId);

        $attribute->forceDelete();

        //Create Log
        Log::logWritter('delete', 'ویژگی برای همیشه حذف شد - ' . $attribute->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function restore($id)
    {
        $this->authorize('product-attributes-restore',Attribute::class);

        $attribute = Attribute::withTrashed()->findOrFail($id);
        $attribute->restore();

        //Create Log
        Log::logWritter('restore', 'ویژگی بازیابی شد - ' . $attribute->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }
}
