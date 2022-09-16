<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $phone;
    public $password;

    protected $rules=[
        'name' => 'required||string||min:3||max:255',
        'email' => 'required||string||email||max:255||unique:users',
        'phone' => 'phone:IR||unique:users,phone_number' ,
        'password' => 'required||string||min:8',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function createUser()
    {
        $this->validate();
        $this->password=Hash::make($this->password);
        User::create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'phone_number' => $this->phone,
                'password' => $this->password
            ]
        );
        session()->flash('success', 'کاربر با موفقیت ایجاد شد');
        $this->redirectRoute('admin.users');

    }

    public function render()
    {
        return view('livewire.admin.user.create')->layout('components.admin.app');
    }
}
