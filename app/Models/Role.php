<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = false;

    protected $table = 'roles';

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}