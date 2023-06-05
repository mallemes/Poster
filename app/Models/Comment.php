<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = false;

    // User who commented
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Post which was commented
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
