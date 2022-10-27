<?php

namespace App\Models;

use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Laravel\Scout\Searchable;

class Article extends Model implements Viewable
{
    use HasFactory, Searchable,  Sluggable, Taggable, InteractsWithViews;

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

    /**
     * Get the route key for the model.
     *
     * @return string
     */

    public function getRouteKey()
    {
        return 'slug';
    }

    public function toSearchableArray()
    {
        return
            [
                'title' => $this->title,
                'user' => $this->user(),
            ];
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
