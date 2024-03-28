<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $t_id
 * @property int    $u_id
 * @property string $fname
 * @property string $t_img
 * @property Date   $dob
 */
class Teacher extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teacher';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 't_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'u_id', 'dob', 't_img'
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
        't_id' => 'int', 'fname' => 'string', 'u_id' => 'int', 'dob' => 'date', 't_img' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dob'
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
