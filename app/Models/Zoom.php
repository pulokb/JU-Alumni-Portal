<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    protected $fillable = [
        'title',
        'details',
        'start_time',
        'user_id',
        'meeting_id',
        'meeting_password',
        'meeting_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
