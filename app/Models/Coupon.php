<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property string $title 优惠券标题
 * @property string $label 优惠券标签
 * @property int $create_time 创建时间
 * @property int $operate_by 最新操作人
 * @property int $operate_time 更新时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon whereOperateBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon whereOperateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Coupon whereTitle($value)
 * @mixin \Eloquent
 */
class Coupon extends Model
{
    //
    protected $table = 'coupons';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'price'];

    public $timestamps = false;
}
