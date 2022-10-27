<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function addArticleRedirect()
    {
        return $this->redirectRoute('admin.article.create');
    }

    public function render()
    {
        $articles=Article::search($this->search)->paginate(10);
        return view('livewire.admin.articles.index', compact('articles'))
            ->layout('components.admin.app');
    }
}
