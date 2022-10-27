<?php

namespace App\Http\Livewire\Admin\Articles;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.articles.create')->layout('components.admin.app');
    }
}
