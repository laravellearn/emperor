<?php

namespace App\Http\Livewire\Admin\Products\Colors;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\admin\products\Color;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Trash extends Component
{
    use AuthorizesRequests;

    public Color $color;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->color = new Color;
    }

    public function render()
    {
        $this->authorize('product-colors-trash',Color::class);

        $colors = $this->readyToLoad ? Color::where('title', 'LIKE', '%' . $this->search . '%')
        ->onlyTrashed()->latest()->paginate(5) : [];
        return view('livewire.admin.products.colors.trash',compact('colors'));
    }

    public function loadColor()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('product-colors-forceDelete',Color::class);

        $color = Color::withTrashed()->findOrFail($this->deleteId);

        $color->forceDelete();

        //Create Log
        Log::logWritter('delete', 'رنگ برای همیشه حذف شد - ' . $color->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function restore($id)
    {
        $this->authorize('product-colors-restore',Color::class);

        $color = Color::withTrashed()->findOrFail($id);
        $color->restore();

        //Create Log
        Log::logWritter('restore', 'رنگ بازیابی شد - ' . $color->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت بازیابی شد');
    }
}
