<?php

namespace App\Models;

use App\enums\UserLevel;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;


class User extends Authenticatable
{
    use Sluggable, HasApiTokens, HasFactory, HasProfilePhoto, HasTeams, Notifiable,
        TwoFactorAuthenticatable, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'phone' => RawPhoneNumberCast::class.':IR',
        'email_verified_at' => 'datetime',
        'level' => UserLevel::class
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function path() {
        return "/user/$this->slug";
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

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function article_comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function episode_comments()
    {
        return $this->hasMany(EpisodeComment::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function is_admin(User $user)
    {
        return $user->level=='admin';
    }

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class);
    }

}
