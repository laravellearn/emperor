<?php

namespace App\Http\Livewire\Admin\Settings\Footer;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Models\Settings\Footer;

class Index extends Component
{
    use AuthorizesRequests;

    public function render()
    {
        $this->authorize('setting-footer',Footer::class);
        return view('livewire.admin.settings.footer.index');
    }
}
