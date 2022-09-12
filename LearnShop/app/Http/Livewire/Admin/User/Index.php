<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $search = '';

    public function deleteUser(User $user)
    {
        $user->delete();
    }

    public function render()
    {
        $users=User::latest()->where('name', 'like', '%'.$this->search.'%')->paginate(12);

        return view('livewire.admin.user.index', compact('users'))
            ->layout('components.admin.app');
    }
}
