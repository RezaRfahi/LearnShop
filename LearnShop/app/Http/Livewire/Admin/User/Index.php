<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $search = '';

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
