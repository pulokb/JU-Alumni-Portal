<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserScholarship extends Model
{
    protected $fillable = [
        'user_id',
        'scholarship_id',
        'father_occupation',
        'father_income',
        'mother_occupation',
        'mother_income',
        'siblings',
        'reasons',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }
}
