<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $st_id
 * @property int    $t_id
 * @property int    $g_id
 * @property int    $u_id
 * @property Date   $dob
 * @property string $st_img
 */
class Student extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'st_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        't_id', 'g_id', 'u_id', 'dob', 'st_img'
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
        'st_id' => 'int', 't_id' => 'int', 'g_id' => 'int', 'u_id' => 'int', 'dob' => 'date', 'st_img' => 'string'
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
