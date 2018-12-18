<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Activity
 *
 * @property int $id
 * @property string $remark
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Activity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Activity extends Model
{
    //
    protected $table = 'activity';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'name', 'status'];

    public $timestamps = true;
}
