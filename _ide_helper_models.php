<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Habit[] $habit
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $log
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $post
 * @property-read \App\Models\Profile $profile
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $content
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereUserId($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Demo extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Habit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Count
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Count newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Count newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Count query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Count whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Count whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Count whereUpdatedAt($value)
 */
	class Count extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Activity extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Profile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Log
 *
 * @property-read \App\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log query()
 */
	class Log extends \Eloquent {}
}

