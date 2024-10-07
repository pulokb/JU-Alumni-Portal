<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs()
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(15);
        return view('frontend.blogs', compact('blogs'));
    }
    public function blogSingle($id)
    {
        $blog = Blog::where('status', 1)->where('id', $id)->with('comments')->first();
        return view('frontend.blog', compact('blog'));
    }
}
