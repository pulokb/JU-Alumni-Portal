@extends('layouts.frontend')
@section('title','Events')
@section('content')
@include('includes.banner',['title'=>'Events','details'=>'This is a page. This is a demo paragraph.This is a demo senten.'])
<!--== Committee Page Content Start ==-->
<section id="page-content-wrap">
    <div class="event-page-content-wrap section-padding">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="event-filter-area">
                        <form action="https://codeboxr.net/themedemo/unialumni/html/index.html" class="form-inline">
                            <select name="year" id="year">
                                <option selected>Year</option>
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="all-event-list">
                        @foreach ($seminars as $seminar)

                        <!-- Single Event Start -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="{{asset('images/'.$seminar->image)}}" class="img-fluid"
                                            alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s {{$seminar->seminar_date->toFormattedDateString()}} at {{date('h:i a',strtotime($seminar->seminar_time))}}</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    {{-- <div class="event-countdown-counter" data-date="2018/9/10"></div> --}}
                                                </div>
                                                {{-- <p>Time: </p> --}}
                                                <h3><a href="{{route('seminar',$seminar->id)}}">{{$seminar->title}}</a></h3>
                                                <p>{!!Str::limit($seminar->details,100)!!}</p>
                                                <p>Place : {{$seminar->place}}</p>
                                                <a href="{{route('seminar',$seminar->id)}}" class="btn btn-brand btn-brand-dark">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Event End -->
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Pagination Start --><br>
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    {{$seminars->links()}}
                    {{-- <div class="pagination-wrap text-center">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item">
                                            </li>
                                            <li ><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> --}}
                </div>
            </div>
            <!-- Pagination End -->
        </div>
    </div>
</section>
<!--== Committee Page Content End ==-->
@endsection
