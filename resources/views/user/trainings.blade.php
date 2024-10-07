@extends('layouts.frontend')
@section('title','Trainings')
@section('content')
@include('includes.banner',['title'=>'Trainings','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])


<section id="blog-area" class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <a href="{{route('user.trainings.create')}}" class="btn btn-brand about-btn ">Create Training</a>
            </div>
        </div><br>
        <!--== Blog Content Wrapper ==-->
        <div class="row">
            @foreach ($trainings as $training)
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
                                    <p>{{$training->created_at->toFormattedDateString()}}</p>
                                </div>
                            </a>

                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="#">{{$training->institute}}</a></h3>
                        <p>Subject : {{$training->subject}}</p>
                        <p>{{$training->details}}</p>
                        <p>From : {{date('d-M-Y',strtotime($training->from))}}  &nbsp;&nbsp; To : {{date('d-M-Y',strtotime($training->to))}}</p>
                        @if($training->file)
                        <a download="" href="{{asset('files/'.$training->file)}}">Download File</a><br><br>
                        @endif
                        <a href="{{route('user.trainings.edit',$training->id)}}" class="btn btn-lg btn-success">Edit</a>
                        <a class="btn btn-lg btn-danger" href="#"
                            onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$training->id}}').submit();}else{event.preventDefault()}">
                            Delete</a>
                        <form id="delete-form-{{$training->id}}"
                            action="{{ route('user.trainings.destroy',$training->id) }}" method="POST"
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