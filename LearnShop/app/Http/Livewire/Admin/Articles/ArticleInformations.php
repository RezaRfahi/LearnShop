<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;

class ArticleInformations extends Component
{
    public Article $article;


    public function render()
    {
        return view('livewire.admin.articles.article-informations');
    }
}
