<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'content', 'status'];
    //

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
