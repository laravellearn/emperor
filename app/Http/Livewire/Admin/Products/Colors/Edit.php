<?php

namespace App\Http\Livewire\Admin\Products\Colors;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\products\Color;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Edit extends Component
{
    use AuthorizesRequests;

    public Color $color;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    protected $rules = [
        'color.title'    => 'required',
        'color.value'    => 'required|min:7|max:7',
        'color.isActive'     => 'nullable',
    ];

    public function ColorForm()
    {
        $this->authorize('product-colors-edit',Color::class);

        $this->validate();
        $this->color->update($this->validate());


        //Create Log
        Log::logWritter('update', 'رنگ ویرایش شد - ' . $this->color->title );

        $this->emit('toast', 'success', 'رکورد با موفقیت ویرایش شد');
    }

    public function changeStatus($id)
    {
        $this->authorize('product-colors-edit',Color::class);

        $color = Color::find($id);
        if ($color->isActive == 1) {
            $color->update([
                'isActive' => 0
            ]);
        } else {
            $color->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت رنگ تغییر کرد - '.$color->title);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-colors-delete',Color::class);

        $color = Color::find($this->deleteId);
        $color->delete();

        //Create Log
        Log::logWritter('delete', 'رنگ حذف شد - ' . $color->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function loadColor()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $this->authorize('product-colors-edit',Color::class);

        $colors = $this->readyToLoad ? Color::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];

        $color = $this->color;
        $color->isActive == 1 ? $color->isActive = true : $color->isActive = false;
        return view('livewire.admin.products.colors.edit', compact('color', 'colors'));
    }
}
