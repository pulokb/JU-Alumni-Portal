@extends('layouts.frontend')
@section('title','Seminar Details')
@section('meta')
<meta name="title" content="{{$seminar->title}}">
<meta name="description" content="{{$seminar->details}}">
<meta name="image" content="{{asset('images/'.$seminar->image)}}">

<meta property="og:title" content="{{$seminar->title}}">
<meta property="og:description" content="{{$seminar->details}}">
<meta property="og:image" content="{{asset('images/'.$seminar->image)}}">
<meta property="og:url" content="{{Request::url()}}">

<meta property="twitter:title" content="{{$seminar->title}}">
<meta property="twitter:description" content="{{$seminar->details}}">
<meta property="twitter:image" content="{{asset('images/'.$seminar->image)}}">
@endsection
@section('content')
@include('includes.banner',['title'=>'Seminar Details','details'=>'This is a page. This is a demo paragraph.This is a
demo senten.'])
<section id="page-content-wrap">
    <div class="single-event-page-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-event-details">
                        <div class="event-thumbnails">
                            <div class="event-thumbnail-carousel owl-carousel">
                                <div class="event-thumb-item">
                                    <img src="{{asset('images/'.$seminar->image)}}" class="img-fluid"
                                        alt="Upcoming Event">
                                    <div class="event-meta">
                                        <h3>Recently we are going to arrange a awesome get together!</h3>
                                        <a class="event-address" href="#"><i class="fa fa-map-marker"></i> at
                                            {{$seminar->place}}</a>
                                        {{-- <a href="#" class="btn btn-brand btn-join">Join</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="event-countdown">
                                {{-- <div class="event-countdown-counter" data-date="2020/10/10"></div> --}}
                                <p>{{$seminar->seminar_date->toFormattedDateString()}} at
                                    {{date('h:i a',strtotime($seminar->seminar_time))}}</p>
                            </div>
                        </div>
                        <h2>{{$seminar->title}}</h2>
                        <p>{!!$seminar->details!!}</p>
                        <br>
                        <div class="sharethis-inline-share-buttons"></div>
                        {{-- 
                        <div class="event-schedul">
                            <h3>Event Schedule</h3>
                            <div class="row">
                                <div class="col-lg-10 m-auto">
                                    <div class="event-schedul-accordion">
                                        <div class="accordion" id="event-schedul-accor">
                                            <!-- Single Event Schedule Start -->
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulOne"
                                                        aria-expanded="false" aria-controls="eventschedulOne"><span
                                                            class="event-time">8am - 10am</span> Grand Opening Speech of
                                                        Our Event And Re Introductory episode
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulOne" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                            accusamus terry richardson ad squid. 3 wolf moon officia
                                                            aute, non cupidatat skateboard dolor brunch. Food truck
                                                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                            sunt aliqua put a bird on it squid single-origin coffee
                                                            nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                            helvetica, craft beer labore wes anderson cred nesciunt
                                                            sapiente ea proident.</p>
                                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                            beer farm-to-table, raw denim aesthetic synth nesciunt you
                                                            probably haven't heard of them accusamus labore sustainable
                                                            VHS.</p>
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon,
                                                            <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Event Schedule End -->

                                            <!-- Single Event Schedule Start -->
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulTwo"
                                                        aria-expanded="true" aria-controls="eventschedulTwo"><span
                                                            class="event-time">8am - 10am</span> Grand Opening Speech of
                                                        Our Event And Re Introductory episode
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulTwo" class="collapse show"
                                                    aria-labelledby="headingTwo" data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                        put a bird on it squid single-origin coffee nulla assumenda
                                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                        excepteur butcher vice lomo. Leggings occaecat craft beer
                                                        farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                        haven't heard of them accusamus labore sustainable VHS.
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon,
                                                            <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Event Schedule End -->

                                            <!-- Single Event Schedule Start -->
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulThree"
                                                        aria-expanded="false" aria-controls="eventschedulThree"><span
                                                            class="event-time">8am - 10am</span> Grand Opening Speech of
                                                        Our Event And Re Introductory episode
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulThree" class="collapse"
                                                    aria-labelledby="headingThree" data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                        put a bird on it squid single-origin coffee nulla assumenda
                                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                        excepteur butcher vice lomo. Leggings occaecat craft beer
                                                        farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                        haven't heard of them accusamus labore sustainable VHS.
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon,
                                                            <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Event Schedule End -->

                                            <!-- Single Event Schedule Start -->
                                            <div class="card">
                                                <div class="card-header" id="headingFour">
                                                    <h5 data-toggle="collapse" data-target="#eventschedulFour"
                                                        aria-expanded="false" aria-controls="eventschedulFour"><span
                                                            class="event-time">8am - 10am</span> Grand Opening Speech of
                                                        Our Event And Re Introductory episode
                                                        <span class="open-close-icon pull-right">
                                                            <i class="fa fa-angle-up"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </span>
                                                    </h5>
                                                </div>

                                                <div id="eventschedulFour" class="collapse"
                                                    aria-labelledby="headingFour" data-parent="#event-schedul-accor">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                        put a bird on it squid single-origin coffee nulla assumenda
                                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                                        excepteur butcher vice lomo. Leggings occaecat craft beer
                                                        farm-to-table, raw denim aesthetic synth nesciunt you probably
                                                        haven't heard of them accusamus labore sustainable VHS.
                                                        <h4 class="speaker-name"><strong>Speaker:</strong> Adam Watshon,
                                                            <span class="speaker-deg">Crish Joshef</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Event Schedule End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection