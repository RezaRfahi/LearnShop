<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserShow extends Component
{
    public function render()
    {
        $users=User::latest()->paginate(12);

        return view('livewire.admin.user-show', compact('users'));
    }
}
