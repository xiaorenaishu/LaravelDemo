<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Demo
 *
 * @property int $id
 * @property string $name 姓名
 * @property string $remark 备注
 * @property int $status 状态
 * @property int $create_time 创建时间
 * @property int $update_time 更新时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Demo whereUpdateTime($value)
 * @mixin \Eloquent
 */
class Demo extends Model
{
    protected $table = 'demo';

    protected $primaryKey = 'id';

    public $timestamps = false;
    //
    protected $fillable = ['name', 'remark', 'status', 'create_time', 'update_time'];

    protected $connection = 'mysql_r_w';
}
