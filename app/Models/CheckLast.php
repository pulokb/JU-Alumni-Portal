<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CheckLast
 * @package App\Models
 * @version October 29, 2020, 1:18 pm +06
 *
 * @property string $name
 */
class CheckLast extends Model
{

    public $table = 'check_lasts';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
