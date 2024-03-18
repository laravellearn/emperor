<?php

namespace App\Http\Livewire\Admin\Products\Attributes\Values;

use App\Models\Admin\Log;
use App\Models\Admin\products\AttributeValues;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use AuthorizesRequests;

    public $ids;
    public AttributeValues $value;
    public $readyToLoad = false;
    public $search,$attribute;
    protected $queryString = ['search','attribute'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->value = new AttributeValues;
    }

    protected $rules = [
        'value.value'     => 'required',
    ];

    public function ValueForm()
    {
        $this->authorize('product-attributes-create',AttributeValues::class);

        $this->validate();
        $value = $this->value->query()->create([
            'value' => $this->value->value,
            'attribute_id' => $this->attribute,
        ]);

        $this->resetForm();

        //Create Log
        Log::logWritter('create','مقدار برای ویژگی محصول ایجاد شد - '.$value->value);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function render()
    {
        $this->authorize('product-attributes',AttributeValues::class);

        $values = $this->readyToLoad ? AttributeValues::where('value', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.products.attributes.values.index',compact('values'));
    }

    public function loadValue()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-attributes-delete',AttributeValues::class);

        $value = AttributeValues::find($this->deleteId);
        $value->delete();

        //Create Log
        Log::logWritter('delete', 'مقدار ویژگی محصول حذف شد - ' . $value->value);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->value->value = null;
    }

}
