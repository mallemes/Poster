<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $guarded = false;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function groups()
    {
        return $this->hasMany(Group::class, 'user_id', 'id');
    }

    public function markOnline()
    {
        $this->last_seen_at = Carbon::now();
        $this->is_online = true;
        $this->save();
    }

    public function markOffline()
    {
        $this->last_seen_at = Carbon::now();
        $this->is_online = false;
        $this->save();
    }

    public function isOnline()
    {
        return $this->is_online;
    }
}
