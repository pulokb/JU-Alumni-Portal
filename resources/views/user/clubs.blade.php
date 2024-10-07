@extends('layouts.frontend')
@section('title','Clubs')
@section('content')
@include('includes.banner',['title'=>'Clubs','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])


<section id="blog-area" class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <a href="{{route('user.clubs.create')}}" class="btn btn-brand about-btn ">Create Clubs</a>
            </div>
        </div><br>
        <!--== Blog Content Wrapper ==-->
        <div class="row">
            @foreach ($clubs as $club)
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
                                    <p>{{$club->created_at->toFormattedDateString()}}</p>
                                </div>
                            </a>

                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="#">{{$club->name}}</a></h3>
                        <p>{{$club->details}}</p>
                        <p>Designation : {{$club->designation}}</p>
                        <p>Member Since : {{date('d-M-Y',strtotime($club->member_since))}}</p>
                        @if($club->file)
                        <a download="" href="{{asset('files/'.$club->file)}}">Download File</a><br><br>
                        @endif
                        <a href="{{route('user.clubs.edit',$club->id)}}" class="btn btn-lg btn-success">Edit</a>
                        <a class="btn btn-lg btn-danger" href="#"
                            onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$club->id}}').submit();}else{event.preventDefault()}">
                            Delete</a>
                        <form id="delete-form-{{$club->id}}"
                            action="{{ route('user.clubs.destroy',$club->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        <!--== Blog Content Wrapper ==-->
    </div>
</section>

@endsection