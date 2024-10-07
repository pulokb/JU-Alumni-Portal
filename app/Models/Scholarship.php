<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Scholarship
 * @package App\Models
 * @version November 1, 2020, 12:01 pm +06
 *
 * @property string $title
 * @property string $details
 * @property boolean $status
 */
class Scholarship extends Model
{

    public $table = 'scholarships';
    



    public $fillable = [
        'title',
        'details',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'details' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:191',
        'details' => 'required|string|max:65530'
    ];

    
}
