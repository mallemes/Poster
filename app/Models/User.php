<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Storage;
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

    // User roles many-to-many relationship
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role', 'user_id', 'role_id');
    }

    // User profile posts one-to-many relationship
    public function posts()
    {
        return $this->hasMany(UserPosts::class, 'author_id', 'id');
    }
    // User posts for groups one-to-many relationship
    public function groupPosts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    // User creating groups #author groups
    public function authorGroups()
    {
        return $this->hasMany(Group::class, 'user_id', 'id');
    }

    // User stories one-to-many relationship
    public function stories()
    {
        return $this->hasMany(Story::class, 'user_id', 'id');
    }

    // in User changed is_online to boolean  (user is online === true, user is offline === false)
    public function markOnline()
    {
        $this->last_seen_at = Carbon::now();
        $this->is_online = true;
        $this->save();
    }
    // in User changed is_online to boolean  (user is online === false, user is offline === true)
    public function markOffline()
    {
        $this->last_seen_at = Carbon::now();
        $this->is_online = false;
        $this->save();
    }

    public function groups(){
        return $this->hasMany(Group::class, 'user_id', 'id');
    }
    // User in groups many-to-many relationship
    public function groupsIn()
    {
        return $this->belongsToMany(Group::class, 'group_user', 'user_id', 'group_id');
    }

    // User friends many-to-many relationship (friendships)
    public function friends()
    {
        return $this->belongsToMany(User::class, 'friendships', 'user_id', 'friend_id');
    }

    // User posts many-to-many relationship (liked posts)
    public function postsLiked()
    {
        return $this->belongsToMany(Post::class, 'post_user', 'user_id', 'post_id');
    }

    // set default image for user
    public static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->image = 'default/default.png';
            $user->save();
        });
    }
}
