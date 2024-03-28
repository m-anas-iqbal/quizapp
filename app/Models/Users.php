<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $email_verified_at
 * @property int    $two_factor_confirmed_at
 * @property int    $created_at
 * @property int    $updated_at
 * @property string $name
 * @property string $role
 * @property string $email
 * @property string $password
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $two_factor_secret
 * @property string $two_factor_recovery_codes
 * @property string $remember_token
 * @property string $profile_photo_path
 */
class Users extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'name', 'role', 'email', 'password', 'name', 'email', 'email_verified_at', 'password', 'two_factor_secret', 'two_factor_recovery_codes', 'two_factor_confirmed_at', 'remember_token', 'current_team_id', 'profile_photo_path', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'name' => 'string', 'role' => 'string', 'email' => 'string', 'password' => 'string', 'name' => 'string', 'email' => 'string', 'email_verified_at' => 'timestamp', 'password' => 'string', 'two_factor_secret' => 'string', 'two_factor_recovery_codes' => 'string', 'two_factor_confirmed_at' => 'timestamp', 'remember_token' => 'string', 'profile_photo_path' => 'string', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'email_verified_at', 'two_factor_confirmed_at', 'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
