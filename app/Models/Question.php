<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $masks
 * @property int    $subject
 * @property string $answer
 * @property string $question
 * @property string $opt1
 * @property string $opt2
 * @property string $opt3
 * @property string $opt4
 */
class Question extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'question';

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
        'answer', 'masks', 'question', 'opt1', 'opt2', 'opt3', 'opt4', 'subject'
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
        'id' => 'int', 'answer' => 'string', 'masks' => 'int', 'question' => 'string', 'opt1' => 'string', 'opt2' => 'string', 'opt3' => 'string', 'opt4' => 'string', 'subject' => 'int'
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
