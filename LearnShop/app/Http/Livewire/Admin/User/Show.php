<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    protected $listeners=[
        'resetPage' => 'resetPage'
    ];

    public function deletePhoto()
    {
        $this->user->deleteProfilePhoto();
    }

    public function render()
    {
        return view('livewire.admin.user.show', ['user' => $this->user])
            ->layout('components.admin.app');
    }
}
