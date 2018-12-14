<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = 'profiles';

    protected $primaryKey = 'id';

    protected $fillable = ['profile'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
