<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = false;

    // User who created post
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Group where post was created
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    // Users who liked post
    public function usersLiked()
    {
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }

    // Comments of post
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
