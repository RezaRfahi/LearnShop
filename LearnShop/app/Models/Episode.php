<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Laravel\Scout\Searchable;

class Episode extends Model implements Viewable
{
    use HasFactory, Searchable, Sluggable, InteractsWithViews;

    protected $fillable=[
    'video_path', 'duration', 'is_free'
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
        return "/episode/$this->slug";
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

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function comments()
    {
        return $this->hasMany(EpisodeComment::class);
    }

}
