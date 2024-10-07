@extends('layouts.frontend')
@section('title','Zoom Meeting')
@section('content')
@include('includes.banner',['title'=>'Zoom Meeting','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])


<section id="blog-area" class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <a href="{{route('user.zooms.create')}}" class="btn btn-brand about-btn ">Create Zoom Meeting</a>
            </div>
        </div><br>
        <!--== Blog Content Wrapper ==-->
        <div class="row">
            @foreach ($zooms as $zoom)
            <!--== Single Blog Post start ==-->
            <div class="col-lg-6 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">

                        <figcaption class="blog-meta clearfix">
                            <a href="#" class="author">
                                <div class="author-pic">
                                    {{-- <img src="assets/img/blog/author.jpg" alt="Author"> --}}
                                </div>
                                <div class="author-info">
                                    <p>{{$zoom->created_at->toFormattedDateString()}}</p>
                                </div>
                            </a>

                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="#">{{$zoom->title}}</a></h3>
                        <p>{{$zoom->details}}</p>
                        <p>Created By : {{$zoom->user->name}}</p>
                        <p>Start Time: {{date('d-M-Y h:i a',strtotime($zoom->start_time))}}</p>
                        <p>Join Url : <a href="{{$zoom->meeting_url}}" target="_blank">{{$zoom->meeting_url}}</a></p>
                        <p>Meeting ID : {{$zoom->meeting_id}}</p>
                        <p>Password : {{$zoom->meeting_password}}</p>
                        
                        <p>
                        @if($zoom->user_id == Auth::id())
                        <a class="btn btn-lg btn-danger" href="#"
                            onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$zoom->id}}').submit();}else{event.preventDefault()}">
                            Delete</a>
                        <form id="delete-form-{{$zoom->id}}"
                            action="{{ route('user.zooms.destroy',$zoom->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        @endif
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        <!--== Blog Content Wrapper ==-->
    </div>
</section>

@endsection