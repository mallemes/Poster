<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $guarded = false;

    // Group creating user #author groups
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Group users #members many-to-many relationship
    public function users()
    {
        return $this->belongsToMany(User::class, 'group_user', 'group_id', 'user_id');
    }

    // Group posts #posts one-to-many relationship
    public function posts()
    {
        return $this->hasMany(Post::class, 'group_id', 'id');
    }
}
