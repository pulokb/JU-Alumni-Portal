@extends('layouts.frontend')
@section('title','Job Opportunities')
@section('content')
@include('includes.banner',['title'=>'Job Opportunities','details'=>'This is a page. This is a demo paragraph.This is a
demo senten.'])

<section id="page-content-wrap">
    <div class="career-page-wrapper">


        <div class="career-page-content-wrap section-padding">
            <div class="container">

                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="event-filter-area">
                            <form action="https://codeboxr.net/themedemo/unialumni/html/index.html" class="form-inline">
                                <select name="cat" id="year">
                                    <option selected>Categories</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                </select>

                                <select name="place" id="place">
                                    <option selected>Place</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>Arizona</option>
                                    <option>Colorado</option>
                                    <option>Delaware</option>
                                </select>

                                <select name="type" id="type">
                                    <option selected>Type</option>
                                    <option>Meetup</option>
                                    <option>Seminar</option>
                                    <option>Get Together</option>
                                </select>

                                <button class="btn btn-brand">Filter</button>
                            </form>
                        </div>
                    </div>
                </div> --}}

                <div class="job-opportunity-wrapper">
                    <div class="row">
                        @foreach ($jobs as $job)
                        <!--== Single Job opportunity Start ==-->
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="single-job-opportunity">
                                <div class="job-opportunity-text">
                                    <div class="job-oppor-logo">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <img src="{{asset('images/'.$job->image)}}" alt="Job">
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a href="{{route('job',$job->id)}}">{{$job->title}}</a></h3>
                                    <p>{!!Str::limit($job->details,100)!!}</p>
                                </div>
                                <a href="{{route('job',$job->id)}}" class="btn btn-job">Apply now</a>
                            </div>
                        </div>
                        <!--== Single Job opportunity End ==-->
                        @endforeach
                    </div>

                    <!-- Pagination Start --><br>
                    <div class="row justify-content-center">
                        <div class="col-lg-2">
                            {{$jobs->links()}}
                        </div>
                    </div>
                    <!-- Pagination End -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection