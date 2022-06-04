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
        'category.slug'    => 'required',
        'category.description'    => 'required',
        'category.icone'    => 'required',
        'category.type'     => 'required',
        'category.image'     => 'nullable',
        'category.isActive'     => 'nullable',
    ];

    public function LogoForm()
    {
        $this->authorize('settings-footer-logo-create',Footerlogo::class);

        $this->validate();
        $logo = $this->Footerlogo->query()->create([
            'title'    => $this->Footerlogo->title,
            'type'     => $this->Footerlogo->type,
            'url'      => $this->Footerlogo->url,
            'isActive' => 1,
        ]);
        if ($this->image) {
            $logo->update([
                'image' => $this->uploadImage()
            ]);
        }
        $this->resetForm();

        //Create Log
        Log::logWritter('create','لوگوی فوتر ایجاد شد - '.$logo->title);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "footerlogo/$year/$month";
        $name = time() . '-' . $this->image->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->image->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function render()
    {
        $this->authorize('settings-footer-logo',Footerlogo::class);

        $logos = $this->readyToLoad ? Footerlogo::where('title', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.settings.footer.logo', compact('logos'));
    }

    public function loadLogo()
    {
        $this->readyToLoad = true;
    }

    public function changeStatus($id)
    {
        $this->authorize('settings-footer-logo-edit',Footerlogo::class);

        $logo = Footerlogo::find($id);
        if ($logo->isActive == 1) {
            $logo->update([
                'isActive' => 0
            ]);
        } else {
            $logo->update([
                'isActive' => 1
            ]);
        }

        //Create Log
        Log::logWritter('update','وضعیت لوگوی فوتر تغییر کرد - '.$logo->title);

        $this->emit('toast', 'success', 'وضعیت رکورد با موفقیت تغییر کرد');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('settings-footer-logo-delete',Footerlogo::class);

        $logo = Footerlogo::find($this->deleteId);
        $logo->delete();

        //Create Log
        Log::logWritter('delete', 'لوگوی فوتر حذف شد - ' . $logo->title);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->Footerlogo->title = null;
        $this->Footerlogo->type = null;
        $this->Footerlogo->image = null;
        $this->Footerlogo->url = null;
        $this->image = null;
    }

    public function render()
    {
        return view('livewire.admin.products.categories.create.index');
    }
}
