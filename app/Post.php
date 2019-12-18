<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = ['source', 'body', 'translation', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function stocks()
    {
        return $this->belongsToMany(Post::class, 'stocks','user_id','post_id')->withTimestamps();
    }

    public function stock_users() 
    {
        return $this->belongsToMany(User::class,'stocks','post_id','user_id')->withTimestamps();
    }
}
