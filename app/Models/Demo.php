<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    protected $table = 'demo';

    protected $primaryKey = 'id';

    public $timestamps = false;
    //
    protected $fillable = ['name', 'remark', 'status', 'create_time', 'update_time'];
}
