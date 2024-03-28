<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $sub_id
 * @property int    $cl_id
 * @property int    $st_id
 * @property string $as_des
 * @property string $asdocname
 * @property Date   $postdate
 */
class Subassign extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subassign';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sub_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cl_id', 'st_id', 'as_des', 'asdocname', 'postdate', 'masks'
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
        'sub_id' => 'int', 'cl_id' => 'int', 'st_id' => 'int', 'as_des' => 'string', 'asdocname' => 'string', 'postdate' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'postdate'
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
