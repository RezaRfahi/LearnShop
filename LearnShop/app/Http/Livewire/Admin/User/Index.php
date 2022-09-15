<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;
    use LivewireAlert;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function addUserRedirect()
    {
        return $this->redirectRoute('admin.user.create');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
    }

    public function showUser($user)
    {
        return $this->redirectRoute('admin.user.show', ['user' => $user['slug']]);
    }

    public function render()
    {
        $users=User::search($this->search)->paginate(12);

        return view('livewire.admin.user.index', compact('users'))
            ->layout('components.admin.app');
    }
}
