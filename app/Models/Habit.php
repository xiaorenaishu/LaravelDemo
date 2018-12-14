<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    protected $table = 'habits';
    protected $primaryKey = 'id';

    protected $fillable = ['label', 'level'];


    public function user()
    {
        return $this->belongsToMany(User::class, 'habit_user');
    }
}
