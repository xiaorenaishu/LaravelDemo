<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Habit
 *
 * @property int $id
 * @property string $label
 * @property string $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Habit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Habit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Habit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Habit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Habit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Habit whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Habit whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Habit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
