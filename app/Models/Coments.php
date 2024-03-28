<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $com_id
 * @property int    $post_id
 * @property int    $u_id
 * @property string $c_des
 * @property Date   $cdate
 */
class Coments extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coments';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'com_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'u_id', 'c_des', 'cdate'
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
        'com_id' => 'int', 'post_id' => 'int', 'u_id' => 'int', 'c_des' => 'string', 'cdate' => 'date'
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
