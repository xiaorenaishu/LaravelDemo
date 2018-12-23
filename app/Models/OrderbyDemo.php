<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderbyDemo extends Model
{
    protected $table = 'orderby_demos';

    protected $fillable = ['city', 'name'];
}
