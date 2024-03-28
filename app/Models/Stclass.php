<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int  $id
 * @property int  $cl_id
 * @property int  $st_no
 * @property int  $status
 * @property Date $cdate
 */
class Stclass extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stclass';

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
        'cl_id', 'st_no', 'status', 'cdate'
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
        'id' => 'int', 'cl_id' => 'int', 'st_no' => 'int', 'status' => 'int', 'cdate' => 'date'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'cdate'
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
