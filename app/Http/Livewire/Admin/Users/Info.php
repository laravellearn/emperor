<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Info extends Component
{
    use AuthorizesRequests;
    public User $user;

    public function mount()
    {
    }

    public function render()
    {
        $this->authorize('user-info', User::class);

        $user = $this->user;
        // $user = User::findOrFail($user);

        return view('livewire.admin.users.info', compact('user'));
    }
}
