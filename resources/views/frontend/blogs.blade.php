@extends('layouts.frontend')
@section('title','Blogs')
@section('content')
@include('includes.banner',['title'=>'Blogs','details'=>'This is a page. This is a demo paragraph.This is a
demo senten.'])

<div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <!-- Blog content Area Start -->
                <div class="col-lg-12">
                    <div class="blog-page-contant-start">
                        <div class="row">
                            @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-4">
                                <article class="single-blog-post">
                                    <figure class="blog-thumb">
                                        <div class="blog-thumbnail">
                                            <img src="{{asset('images/'.$blog->image)}}" alt="Blog"
                                                class="img-fluid" />
                                        </div>
                                        <figcaption class="blog-meta clearfix">
                                            <a href="{{$blog->url()}}" class="author">
                                                <div class="author-pic">
                                                    {{-- <img src="assets/img/blog/author.jpg" alt="Author"> --}}
                                                </div>
                                                <div class="author-info">
                                                    <h5>{{$blog->posted_by}}</h5>
                                                    <p>{{$blog->created_at->toFormattedDateString()}}</p>
                                                </div>
                                            </a>

                                        </figcaption>
                                    </figure>

                                    <div class="blog-content">
                                        <h3><a href="{{$blog->url()}}">{{$blog->title}}</a></h3>
                                        <p>{!!Str::limit($blog->details,100)!!}</p>
                                        <a href="{{$blog->url()}}" class="btn btn-brand">More</a>
                                    </div>
                                </article>
                            </div>
                            @endforeach

                        </div>

                        <!-- Pagination Start -->
                        <br>
                        <br>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-lg-2">
                                {{$blogs->links()}}
                            </div>
                        </div>
                        <!-- Pagination End -->
                    </div>
                </div>
                <!-- Blog content Area End -->
            </div>
        </div>
    </div>
</div>

@endsection