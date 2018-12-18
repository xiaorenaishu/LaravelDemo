<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Profile
 *
 * @property int $id
 * @property int $user_id
 * @property string $profile
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereProfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Profile whereUserId($value)
 * @mixin \Eloquent
 */
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
