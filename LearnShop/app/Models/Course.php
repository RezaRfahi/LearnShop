<?php

namespace App\Models;

use Cviebrock\EloquentTaggable\Taggable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Course extends Model
{
    use HasFactory, Searchable, Sluggable, Taggable;


    protected $fillable = [
        'title', 'price', 'image_path'
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
        return "/course/$this->slug";
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class);
    }

}
