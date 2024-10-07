@extends('layouts.frontend')
@section('title','Jobs')
@section('content')
@include('includes.banner',['title'=>'Jobs','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])


<section id="blog-area" class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <a href="{{route('user.jobs.create')}}" class="btn btn-brand about-btn ">Create New Job</a>
            </div>
        </div><br>
        <!--== Blog Content Wrapper ==-->
        <div class="row">
            @foreach ($jobs as $job)
            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-4">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="{{asset('images/'.$job->image)}}" alt="Blog" class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="#" class="author">
                                <div class="author-info">
                                    <p>{{$job->created_at->toFormattedDateString()}}</p>
                                </div>
                            </a>

                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="#">{{$job->title}}</a></h3>
                        <p>{!!Str::limit($job->details,100)!!}</p>
                        <p>Status : @if ($job->status == "request")
                            <button class="btn btn-warning">Pending</button>
                            @elseif($job->status == "Close")
                            <button class="btn btn-danger">Close</button>
                            <a href="{{route('user.jobs.applicants',$job->id)}}" class="btn btn-info">View
                                Applicants</a>
                            @else
                            <button class="btn btn-success">Open</button>
                            <a href="{{route('user.jobs.applicants',$job->id)}}" class="btn btn-info">View
                                Applicants</a>
                            <a href="{{route('user.jobs.close',$job->id)}}" onclick="return confirm('Are you sure?')"
                                class="btn btn-danger">Close this job</a>
                            @endif</p>
                        @if($job->file)
                        <a download="" href="{{asset('files/'.$job->file)}}">Download File</a><br><br>
                        @endif
                        <a href="{{route('job',$job->id)}}" class="btn btn-lg btn-primary">View</a>
                        <a href="{{route('user.jobs.edit',$job->id)}}" class="btn btn-lg btn-success">Edit</a>
                        <a class="btn btn-lg btn-danger" href="#"
                            onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$job->id}}').submit();}else{event.preventDefault()}">
                            Delete</a>
                        <form id="delete-form-{{$job->id}}" action="{{ route('user.jobs.destroy',$job->id) }}"
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

<section id="blog-area" class="">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <button class="btn btn-brand about-btn ">Applied Jobs</button>
            </div>
        </div><br>
        <!--== Blog Content Wrapper ==-->
        <div class="row">
            @foreach ($appliedJobs as $appliedJob)
            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-4">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="{{asset('images/'.$appliedJob->jobDetails->image)}}" alt="Blog" class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="#" class="author">
                                <div class="author-info">
                                    <p>{{$appliedJob->jobDetails->created_at->toFormattedDateString()}}</p>
                                </div>
                            </a>

                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="{{route('job',$appliedJob->jobDetails->id)}}">{{$appliedJob->jobDetails->title}}</a></h3>
                        <p>{!!Str::limit($appliedJob->jobDetails->details,100)!!}</p>
                        <p>Status : @if($appliedJob->jobDetails->status == "Close")
                            <button class="btn btn-danger">Close</button>
                            @else
                            <button class="btn btn-success">Open</button>
                            @endif</p>
                        @if($appliedJob->jobDetails->file)
                        <a download="" href="{{asset('files/'.$appliedJob->jobDetails->file)}}">Download File</a>
                        @endif<br/>
                        <a href="{{route('job',$job->id)}}" class="btn btn-lg btn-primary">View Full Details</a>
                    </div>
                </article>
            </div>
            @endforeach
        </div><br>
        <!--== Blog Content Wrapper ==-->
    </div>
</section>

@endsection