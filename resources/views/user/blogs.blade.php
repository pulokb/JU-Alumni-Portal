@extends('layouts.frontend')
@section('title','Blogs')
@section('content')
@include('includes.banner',['title'=>'Blogs','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])


<section id="blog-area" class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <a href="{{route('user.blogs.create')}}" class="btn btn-brand about-btn ">Create New Blog</a>
            </div>
        </div><br>
        <!--== Blog Content Wrapper ==-->
        <div class="row">
            @foreach ($blogs as $blog)
            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-4">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="{{asset('images/'.$blog->image)}}" alt="Blog" class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="#" class="author">
                                <div class="author-info">
                                    <p>{{$blog->created_at->toFormattedDateString()}}</p>
                                </div>
                            </a>

                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="#">{{$blog->title}}</a></h3>
                        <p>{!!Str::limit($blog->details,100)!!}</p>
                        <p>Status : @if ($blog->status == 0)
                            <button class="btn btn-warning">Pending</button>
                            @else
                            <button class="btn btn-success">Open</button>
                            @endif</p>
                        <a href="{{$blog->url()}}" class="btn btn-lg btn-primary">View</a>
                        <a href="{{route('user.blogs.edit',$blog->id)}}" class="btn btn-lg btn-success">Edit</a>
                        <a class="btn btn-lg btn-danger" href="#"
                            onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$blog->id}}').submit();}else{event.preventDefault()}">
                            Delete</a>
                        <form id="delete-form-{{$blog->id}}" action="{{ route('user.blogs.destroy',$blog->id) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </article>
            </div>
            @endforeach
        </div><br>
        <!--== Blog Content Wrapper ==-->
    </div>
</section>


@endsection