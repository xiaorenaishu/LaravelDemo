<?php

namespace App;

use App\Models\Habit;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function profile() //关联profile表
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function post() //关联Posts表
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function habit()
    {
        return $this->belongsToMany(Habit::class, 'habit_user');
//        return $this->belongsToMany(Habit::class, 'habit_user')->withPivot(['中间表字段'])->withTimestamps(); //附带中间表的附加字段
    }

}
