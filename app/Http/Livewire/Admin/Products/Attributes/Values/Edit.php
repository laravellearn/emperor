<?php

namespace App\Http\Livewire\Admin\Products\Attributes\Values;

use App\Models\Admin\Log;
use App\Models\Admin\products\AttributeValues;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithPagination;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.admin.products.attributes.values.edit');
    }
}
