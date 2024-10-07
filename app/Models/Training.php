<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'user_id',
        'institute',
        'subject',
        'details',
        'from',
        'to',
        'file',
    ];
}
