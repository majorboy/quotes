<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class User extends Authenticatable implements HasMedia
{
    use Notifiable;
    use HasMediaTrait;

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(50)
            ->height(50);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //リレーション

    public function posts() 
    {
        return $this->hasMany('App\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function stocks()
    {
        return $this->belongsToMany(Post::class, 'stocks','user_id','post_id')->withTimestamps();
    }

    // 投稿ストック機能
    public function stock($postId)
    {
        $this->stocks()->attach($postId);
    }

    public function unstock($postId)
    {
        $this->stocks()->detach($postId);
    }

    public function is_stock($postId)
    {
        return $this->stocks()->where('post_id', $postId)->exists();
    }

    public function has_avatar() 
    {
        $count = $this->media->count();
        if($count == 1) {
            return true;
        } else {
            return false;
        }
    }
}
