<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Str;

class Blog extends Model
{
     protected $fillable = ['title', 'details', 'image', 'tags', 'posted_by', 'user_id', 'status'];

     public function url()
     {
          return route('blog.single', [$this->id, Str::slug($this->title, '-')]);
     }

     public function user()
     {
          return $this->belongsTo(User::class);
     }

     public function comments()
     {
          return $this->hasMany(Comment::class)->with('user');
     }
}
