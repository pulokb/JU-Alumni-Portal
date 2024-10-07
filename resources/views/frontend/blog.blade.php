@extends('layouts.frontend')
@section('title','Blog')
@section('meta')
<meta name="title" content="{{$blog->title}}">
<meta name="description" content="{{$blog->details}}">
<meta name="image" content="{{asset('images/'.$blog->image)}}">

<meta property="og:title" content="{{$blog->title}}">
<meta property="og:description" content="{{$blog->details}}">
<meta property="og:image" content="{{asset('images/'.$blog->image)}}">
<meta property="og:url" content="{{Request::url()}}">

<meta property="twitter:title" content="{{$blog->title}}">
<meta property="twitter:description" content="{{$blog->details}}">
<meta property="twitter:image" content="{{asset('images/'.$blog->image)}}">
@endsection
@section('content')
@include('includes.banner',['title'=>'Blog','details'=>'This is a page. This is a demo paragraph.This is a
demo senten.'])

<div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <!-- Blog content Area Start -->
                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <img src="{{asset('images/'.$blog->image)}}" class="img-fluid" alt="Blog">
                            </div>
                            <div class="single-blog-meta">
                                <h2>{{$blog->title}}</h2>
                                <div class="posting-info">
                                    <a href="#">{{$blog->created_at->toFormattedDateString()}}</a> • Posted by: <a
                                        href="#">{{$blog->posted_by}}</a>
                                </div>
                            </div>
                        </header>
                        <section class="blog-details">
                            {!!$blog->details!!}
                            <br>
                            <br>
                            <div class="sharethis-inline-share-buttons"></div>
                        </section>

                        <footer class="post-share">

                            <div class="row no-gutters ">
                                <div class="col-8">
                                    <div class="shareonsocial">
                                        <span>Comments:</span>
                                    </div>
                                </div>
                            </div>

                        </footer>
                        <br>
                        <ul style="margin-left: 10px">

                            @foreach ($blog->comments as $comment)

                            <li><span style="color: green">{{$comment->user->name}} : </span> {{$comment->comment}}
                            </li>
                            @endforeach
                        </ul>
                        <br>
                        <form class="" action="{{route('user.blogs.comment')}}" method="POST">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <textarea style="margin-left: 10px" rows="3" class="form-control" name="comment"
                                placeholder="Write Comment"></textarea>
                            <div class="form-footer pt-4 pt-2 mt-4 border-top">
                                <button type="submit" class="btn btn-reg">
                                    <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Add Comment
                                </button>
                            </div>
                        </form>
                    </article>
                </div>
                <!-- Blog content Area End -->
            </div>
        </div>
    </div>
</div>

@endsection