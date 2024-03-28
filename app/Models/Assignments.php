<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $as_id
 * @property int    $cl_id
 * @property int    $postdate
 * @property int    $totalmask
 * @property string $as_des
 * @property string $asdocname
 * @property string $name
 * @property Date   $startdate
 * @property Date   $enddate
 */
class Assignments extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'assignments';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'as_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cl_id', 'as_des', 'asdocname', 'startdate', 'enddate', 'postdate', 'totalmask', 'name'
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
        'as_id' => 'int', 'cl_id' => 'int', 'as_des' => 'string', 'asdocname' => 'string', 'startdate' => 'date', 'enddate' => 'date', 'postdate' => 'timestamp', 'totalmask' => 'int', 'name' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'startdate', 'enddate', 'postdate'
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
