<?php

namespace App\Http\Livewire\Admin\Settings\Index;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Admin\Log;
use App\Models\Admin\settings\Slider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Index extends Component
{
    use AuthorizesRequests;

    use WithFileUploads;

    public $image;
    public $ids;
    public Slider $slider;
    public $readyToLoad = false;
    public $search;
    protected $queryString = ['search'];
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->slider = new Slider;
    }

    protected $rules = [
        'slider.alt'    => 'required',
        'slider.position'     => 'required',
        'slider.link'     => 'nullable',
        'slider.image'     => 'nullable',
    ];

    public function SliderForm()
    {
        $this->authorize('setting-index',Slider::class);

        $this->validate();
        $slider = $this->slider->query()->create([
            'alt'    => $this->slider->alt,
            'link'     => $this->slider->link,
            'position'      => $this->slider->position,
        ]);
        if ($this->image) {
            $slider->update([
                'image' => $this->uploadImage()
            ]);
        }
        $this->resetForm();

        //Create Log
        Log::logWritter('create','بنر یا اسلایدر ایجاد شد - '.$slider->alt);

        $this->emit('toast', 'success', 'رکورد با موفقیت ثبت شد');
    }

    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "sliders/$year/$month";
        $name = time() . '-' . $this->image->getClientOriginalName();
        $name = str_replace(' ', '-', $name);
        $this->image->storeAs($directory, $name);
        return "/$directory/$name";
    }

    public function render()
    {
        $this->authorize('setting-index',Slider::class);

        $sliders = $this->readyToLoad ? Slider::where('alt', 'LIKE', '%' . $this->search . '%')->latest()->paginate(5) : [];
        return view('livewire.admin.settings.index.index', compact('sliders'));
    }

    public function loadSlider()
    {
        $this->readyToLoad = true;
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        $this->authorize('setting-index',Slider::class);

        $slider = Slider::find($this->deleteId);
        $slider->delete();

        //Create Log
        Log::logWritter('delete', 'بنر یا اسلایدر حذف شد - ' . $slider->alt);

        $this->emit('toast', 'success', 'ردیف با موفقیت حذف شد');
    }

    public function resetForm()
    {
        $this->slider->alt = null;
        $this->slider->position = null;
        $this->slider->link = null;
        $this->image = null;
    }

}
