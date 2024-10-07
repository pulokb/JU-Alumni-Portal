<?php

namespace App\Http\Controllers\User;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Models\Comment;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Facades\Auth;
use Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::where('user_id', Auth::id())->latest()->get();
        return view('user.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.blog_create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCreateRequest $request)
    {
        $imageName = FileHelper::uploadImage($request, NULL, ['avatar', 'big']);
        Blog::create(array_merge($request->all(), ['image' => $imageName, 'user_id' => Auth::id(), 'status' => 0, 'posted_by' => Auth::user()->name]));
        return back()->with('success', 'Successfully Created. Admin will review it.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('user.blog_show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        if ($blog->user_id != Auth::id()) {
            abort(404);
        }
        return view('user.blog_edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        $imageName = FileHelper::uploadImage($request, $blog, ['avatar', 'big']);
        $blog->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog->user_id != Auth::id()) {
            abort(404);
        }
        FileHelper::deleteImage($blog);
        $blog->delete();
        return back()->with('success', 'Delete Successful.');
    }

    public function comment(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required|string|max:65530'
        ]);
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comment;
        $comment->save();
        return back()->with('success', 'Comment Added');
    }
}
