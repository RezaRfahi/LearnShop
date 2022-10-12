<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ResetPassword extends Component
{
    use LivewireAlert;

    public User $user;
    public $password;

    public function updated()
    {
        $this->validate([
            'password' => 'required||string||min:8'
        ]);
    }

    public function resetPassword()
    {
        $this->validate([
            'password' => 'required||string||min:8'
        ]);
        $this->user->forceFill([
            'password' => Hash::make($this->password),
        ])->save();
        $this->alert('success', 'پسورد با موفقیت تغییر یافت', ['position' => 'center']);
    }


    public function render()
    {
        return view('livewire.admin.user.reset-password');
    }
}
