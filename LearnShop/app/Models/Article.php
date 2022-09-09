<?php

namespace App\Models;

use Conner\Tagging\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use Taggable;
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'title', 'body'
    ];

    public function sluggable(): array
    {

        return [
            'slug' => [
                'source' => 'title'
            ]
        ];

    }

    public function path() {
        return "/article/$this->slug";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(ArticleComment::class)->whereNull('parent_id');
    }

}
