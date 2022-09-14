<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{

    public User $user;

    public function editUser($user)
    {
        return $this->redirectRoute('admin.user.edit', ['user' => $user['slug']]);
    }

    public function render()
    {
        return view('livewire.admin.user.show', ['user' => $this->user])
            ->layout('components.admin.app');
    }
}
