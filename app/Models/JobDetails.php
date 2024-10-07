<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class JobDetails
 * @package App\Models
 * @version October 31, 2020, 12:50 pm +06
 *
 * @property string $title
 * @property string $details
 * @property string $image
 * @property string $file
 */
class JobDetails extends Model
{

    public $table = 'job_details';

    public function user()
    {
        return $this->belongsTo(User::class);
    }




    public $fillable = [
        'user_id',
        'title',
        'details',
        'image',
        'file',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' =>  'integer',
        'title' => 'string',
        'details' => 'string',
        'image' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:191',
        'details' => 'required|string|max:65530',
        'image' => 'required|image|max:5000',
        'file' => 'nullable|mimes:jpg,jpeg,pdf,doc,docx,xls,xlsx,png,zip|max:10000'
    ];
}
