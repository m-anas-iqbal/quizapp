<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int      $post_id
 * @property int      $t_id
 * @property string   $p_des
 * @property string   $docname
 * @property DateTime $postdate
 */
class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'post';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'post_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        't_id', 'p_des', 'docname', 'postdate'
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
        'post_id' => 'int', 't_id' => 'int', 'p_des' => 'string', 'docname' => 'string', 'postdate' => 'datetime'
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
