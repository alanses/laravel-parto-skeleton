<?php

namespace App\Modules\User\Entities;

use App\Modules\Activities\Entities\Activity;
use App\Modules\Booking\Entities\BookingClass;
use App\Modules\Gym\Entities\Gym;
use App\Modules\GymClass\Entities\ClassScheduleDescription;
use App\Modules\Photos\Entities\UserPhoto;
use App\Modules\Transactions\Entities\Transaction;
use App\Modules\UserProfile\Entities\UserSetting;
use App\Ship\Abstraction\AbstractEntity;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends AbstractEntity implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;
    use HasApiTokens, Notifiable;

    static public $is_supper_admin = 1;
    static public $is_gym = 2;
    static public $is_user = 3;

    protected $fillable = [
        'name',
        'email',
        'login',
        'password',
        'user_type'
    ];

    /**
     * Encrypt password before creating
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
