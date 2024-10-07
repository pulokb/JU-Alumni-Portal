@extends('layouts.frontend')
@section('title','Home')
@section('meta')
@if(count($seminars)>0)
<meta name="title" content="{{$seminars[0]->title}}">
<meta name="description" content="{{$seminars[0]->details}}">
<meta name="image" content="{{asset('images/'.$seminars[0]->image)}}">

<meta property="og:title" content="{{$seminars[0]->title}}">
<meta property="og:description" content="{{$seminars[0]->details}}">
<meta property="og:image" content="{{asset('images/'.$seminars[0]->image)}}">
<meta property="og:url" content="{{Request::url()}}">

<meta property="twitter:title" content="{{$seminars[0]->title}}">
<meta property="twitter:description" content="{{$seminars[0]->details}}">
<meta property="twitter:image" content="{{asset('images/'.$seminars[0]->image)}}">
@endif
@endsection
@section('content')
<!--== Slider Area Start ==-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-left">
        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Proud</h2>
                            <h3>Students of <span>Bangladesh University of Professionals</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be
                                the need (academic, relocation, career, projects, mentorship, etc. you can ask the
                                community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#about-area" class="btn btn-brand smooth-scroll">our mission</a>
                                <a href="{{route('about')}}" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>We Are Proud</h2>
                            <h3>Students of <span>Bangladesh University of Professionals</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be
                                the need (academic, relocation, career, projects, mentorship, etc. you can ask the
                                community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-brand">our mission</a>
                                <a href="#" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->

        <!-- Single Slide Item Start -->
        <div class="single-slide-wrap slide-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h2>Excellence through knowledge</h2>
                            <h3> <span>Bangladesh University of Professionals</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be
                                the need (academic, relocation, career, projects, mentorship, etc. you can ask the
                                community and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-brand">our mission</a>
                                <a href="#" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Slide Item End -->
    </div>

    <!-- Social Icons Area Start -->
    <div class="social-networks-icon">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i> <span>3.2m Followers</span></a></li>

            <li><a href="#"><i class="fa fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
        </ul>
    </div>
    <!-- Social Icons Area End -->
</section>
<!--== Slider Area End ==-->

<!--== Upcoming Event Area Start ==-->
<section id="upcoming-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Upcoming event</h3>
                    </div>
                    <div class="upcoming-event-content owl-carousel">
                        @foreach ($seminars as $seminar)
                        <!-- No 1 Event -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="{{asset('images/'.$seminar->image)}}" class="img-fluid"
                                            alt="Upcoming Event">
                                        <h4 class="up-event-date">{{$seminar->seminar_date->toFormattedDateString()}} at
                                            {{date('h:i a',strtotime($seminar->seminar_time))}}</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    {{-- <div class="event-countdown-counter" data-date="2018/9/10">
                                                    </div>
                                                    <p>Remaining</p> --}}
                                                </div>
                                                <h3><a href="{{route('seminar',$seminar->id)}}">{{$seminar->title}}</a>
                                                </h3>
                                                <p>{!!Str::limit($seminar->details,100)!!}</p>
                                                <p>Place : {{$seminar->place}}</p>
                                                <a href="{{route('seminar',$seminar->id)}}"
                                                    class="btn btn-brand btn-brand-dark">View Details</a><br><br>
                                                <div class="sharethis-inline-share-buttons"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Upcoming Event Area End ==-->

<!--== About Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="about-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="about-content-wrap">
                        <div class="section-title text-center text-lg-left">
                            <h2>Our Misssion</h2>
                        </div>

                        <div class="about-thumb">
                            <img src="{{asset('frontend/assets/img/about-bg.jpg')}}" alt="" class="img-fluid">
                        </div>

                        <p>There are many company Lorem ipsm dolor sitg amet, csetur adipicing elit, sed do eiusmod
                            tempor dncint ut labore et dolore magna alis enim ad minim veniam, quis csetur adipicing
                            elit, sed do eiusmod tempor dncint ut labore et dolore magna alis enim ad minim veniam,
                            quis nostrud exercitation ullamco.</p>
                        <p>There are many company Lorem ipsm dolor sitg amet, csetur adipicing elit, sed do eiusmod
                            tempor dncint ut labore et dolore magna alis enim ad minim veniam, quis nostrud
                            exercitation ullamco.</p>
                        <a href="{{route('about')}}" class="btn btn-brand about-btn">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== About Area End ==-->

<!--== Our Responsibility Area Start ==-->
<section id="responsibility-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our Responsibility</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{asset('frontend/assets/img/responsibility/01.png')}}" alt="Responsibility">
                    <h4>Scholarship</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{asset('frontend/assets/img/responsibility/02.png')}}" alt="Responsibility">
                    <h4>Help Current Students</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{asset('frontend/assets/img/responsibility/03.png')}}" alt="Responsibility">
                    <h4>Help Our University</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{asset('frontend/assets/img/responsibility/04.png')}}" alt="Responsibility">
                    <h4>Build Our Community</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area
                    </p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->
        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section>
<!--== Our Responsibility Area End ==-->

<!--== FunFact Area Start ==-->

<!--== FunFact Area End ==-->

<!--== Job Opportunity Area Start ==-->
<section id="job-opportunity" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Job Openings</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Job opportunity Wrapper ==-->
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

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{route('jobs')}}" class="btn btn-brand btn-loadmore">All job list</a>
                </div>
            </div>
        </div>
        <!--== Job opportunity Wrapper ==-->
    </div>
</section>

<section id="funfact-area">
    <div class="container-fluid">
        <div class="row text-center">
            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="{{asset('frontend/assets/img/fun-fact/user.svg')}}" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count">{{$countAlumni}}</h5>
                        <p>Alumni</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="{{asset('frontend/assets/img/fun-fact/picture.svg')}}" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5 class="funfact-count">{{$countGallery}}</h5>
                        <p>Photos</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="{{asset('frontend/assets/img/fun-fact/event.svg')}}" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count">{{$countSeminar}}</span>+</h5>
                        <p>Events</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->

            <!--== Single FunFact Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-funfact-wrap">
                    <div class="funfact-icon">
                        <img src="{{asset('frontend/assets/img/fun-fact/medal.svg')}}" alt="Funfact">
                    </div>
                    <div class="funfact-info">
                        <h5><span class="funfact-count">{{$countJobDetails}}</span>+</h5>
                        <p>Jobs</p>
                    </div>
                </div>
            </div>
            <!--== Single FunFact End ==-->
        </div>
    </div>
</section>
<!--== Job Opportunity Area End ==-->

<!--== Gallery Area Start ==-->

<!--== Gallery Area Start ==-->

<!--== Scholership Promo Area Start ==-->
<section id="scholership-promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="scholership-promo-text">
                    <h2>BUP Alumni Society provides <span>scholarship</span> for Talented Students!</h2>
                    <p>{{$scholarship->title}} </p>
                    <p>{!!$scholarship->details!!} </p>
                    {{-- <a href="#" class="btn btn-brand">Apply Now</a> --}}
                    <a class="btn btn-brand" href="{{route('user.scholarship.apply.view',$scholarship->id)}}">
                        Apply Now
                    </a>


                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apply For Scholarship</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email">

                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control"></textarea>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Scholership Promo Area End ==-->

<!--== Blog Area Start ==-->
<section id="blog-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Campus & Blog</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

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
                        <a href="{{$blog->url()}}" class="btn btn-brand">Read More</a>
                    </div>
                </article>
            </div>
            <!--== Single Blog Post End ==-->
            @endforeach
            <div class="col-lg-12 text-center">
                <a href="{{route('blogs')}}" class="btn btn-brand btn-loadmore">See more</a>
            </div>

            <!--== Single Blog Post End ==-->
        </div>
        <!--== Blog Content Wrapper ==-->
    </div>
</section>
<!--== Blog Area EndBlog ==-->

@endsection