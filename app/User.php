<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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
        $exist = $this->is_stock($postId);

        if($exist){
            return false;
        } else {
            $this->stocks()->attach($postId);
            return true;
        }
    }

    public function unstock($postId)
    {
        $exist = $this->is_stock($postId);

        if($exist) {
            $this->stocks()->detach($postId);
            return true;
        } else {
            return false;
        }
    }

    public function is_stock($postId)
    {
        return $this->stocks()->where('post_id', $postId)->exists();
    }
}
