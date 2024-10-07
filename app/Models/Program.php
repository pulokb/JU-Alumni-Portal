<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Str;
class Program extends Model
{
     protected $fillable=['title','details','image','category'];
     
     public function url()
     {
          return route('program.single', [$this->id, Str::slug($this->title, '-')]);
     }
}
