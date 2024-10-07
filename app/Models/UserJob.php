<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    protected $fillable = [
        'user_id',
        'job_details_id',
        'cover_letter',
        'file',
        'requrite_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jobDetails()
    {
        return $this->belongsTo(JobDetails::class);
    }
}
