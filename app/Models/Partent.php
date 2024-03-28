<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $g_id
 * @property int    $u_id
 * @property int    $st_id
 * @property string $name
 */
class Partent extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partent';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'g_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'u_id', 'st_id'
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
        'g_id' => 'int', 'name' => 'string', 'u_id' => 'int', 'st_id' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
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
