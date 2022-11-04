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
    public $order='';
    public $filter_enabled=false;

    public function changeFilter()
    {
        $this->filter_enabled=$this->filter_enabled ? false  : true;
    }

    public function addArticleRedirect()
    {
        return $this->redirectRoute('admin.article.create');
    }

    public function render()
    {
        $headers=['عنوان', 'منتشرکننده', 'تاریخ انتشار', 'بازدید', 'لایک', 'نظر'];
        $articles=Article::search($this->search)->orderBy($this->order)->paginate(10);
        return view('livewire.admin.articles.index', compact('articles','headers'))
            ->layout('components.admin.app');
    }
}
