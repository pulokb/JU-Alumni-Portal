@extends('layouts.frontend')
@section('title','About')
@section('content')
@include('includes.banner',['title'=>'About','details'=>'This is a page. This is a demo paragraph.This is a demo senten.'])
<!--== Committee Page Content Start ==-->
<section id="page-content-wrap">
    <div class="about-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <!-- Single about text start -->
                    <div class="single-about-text">
                        <span class="year">1834</span>
                        <img src="{{asset('frontend/assets/img/about-bg.jpg')}}"alt="About" class="img-fluid img-left">
                        <h2 class="h3">ESTD of This Alumni Assotitation</h2>
                        <p>Aenean viverra rhoncus sspede. Phasellssus leo dolor, tempus non, auctor endrerit
                            quis, nisi. Fusce neque. Donec vitae orci sed dolor rutrum ausssctor. Sed
                            fringilla mauris sit amet nibh.</p>
                        <p>Etiam rhoncus. Ut lddffdfqwqeo. Morbi mollis tellus ac sapien. Fusce fermentum oo
                            nec arcu. Quisque manisl idUt leo. Morbi mollis tellus ac sapien. Fusce
                            fermentum oo nec ante tempus hendrerit. Curabitur at lacus ac velit ornare
                            lobortis. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                            turpis. Quisque id mi.Aenean viverra rhoncus pede. Phasellus leo dolor, tempus non, auctor
                            endrerit quis, nisi.
                            Fusce neque. Donec vitae orci sed dolor rutrum auctor. Sed fringilla mauris sit amet
                            nibh.Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec arcu.
                            Quisque malesuada placerat nisl. Etiam sit amet orci eget faucitincidunt. Quisque
                            rutrum. Pellentesque posuere. Praesent ac massa at ligula laoureet iaculis. Cras risus
                            ipsum, faucibus ut, ullamcorper id, varius ac, leo.</p>
                    </div>
                    <!-- Single about text End -->

                    <!-- Single about text start -->
                    <div class="single-about-text">
                        <span class="year">1920</span>
                        <img src="{{asset('frontend/assets/img/bup.jpg')}}"alt="About" class="img-fluid img-right">
                        <h2 class="h3">Our First Achivement in History</h2>
                        <p>Aenean viverra rhoncus sspede. Phasellssus leo dolor, tempus non, auctor endrerit
                            quis, nisi. Fusce neque. Donec vitae orci sed dolor rutrum ausssctor. Sed
                            fringilla mauris sit amet nibh.</p>
                        <p>Etiam rhoncus. Ut lddffdfqwqeo. Morbi mollis tellus ac sapien. Fusce fermentum oo
                            nec arcu. Quisque manisl idUt leo. Morbi mollis tellus ac sapien. Fusce
                            fermentum oo nec ante tempus hendrerit. Curabitur at lacus ac velit ornare
                            lobortis. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                            turpis. Quisque id mi.Aenean viverra rhoncus pede. Phasellus leo dolor, tempus non, auctor
                            endrerit quis, nisi.
                            Fusce neque. Donec vitae orci sed dolor rutrum auctor. Sed fringilla mauris sit amet
                            nibh.Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec arcu.
                            Quisque malesuada placerat nisl. Etiam sit amet orci eget faucitincidunt. Quisque
                            rutrum. Pellentesque posuere. Praesent ac massa at ligula laoureet iaculis. Cras risus
                            ipsum, faucibus ut, ullamcorper id, varius ac, leo.</p>
                    </div>
                    <!-- Single about text End -->

                    <!-- Single about text start -->
                    <div class="single-about-text">
                        <span class="year">2006</span>
                        <img src="{{asset('frontend/assets/img/about-bg.jpg')}}"alt="About" class="img-fluid img-left">
                        <h2 class="h3">Our New Genaretion</h2>
                        <p>Aenean viverra rhoncus sspede. Phasellssus leo dolor, tempus non, auctor endrerit
                            quis, nisi. Fusce neque. Donec vitae orci sed dolor rutrum ausssctor. Sed
                            fringilla mauris sit amet nibh.</p>
                        <p>Etiam rhoncus. Ut lddffdfqwqeo. Morbi mollis tellus ac sapien. Fusce fermentum oo
                            nec arcu. Quisque manisl idUt leo. Morbi mollis tellus ac sapien. Fusce
                            fermentum oo nec ante tempus hendrerit. Curabitur at lacus ac velit ornare
                            lobortis. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                            turpis. Quisque id mi.Aenean viverra rhoncus pede. Phasellus leo dolor, tempus non, auctor
                            endrerit quis, nisi.
                            Fusce neque. Donec vitae orci sed dolor rutrum auctor. Sed fringilla mauris sit amet
                            nibh.Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec arcu.
                            Quisque malesuada placerat nisl. Etiam sit amet orci eget faucitincidunt. Quisque
                            rutrum. Pellentesque posuere. Praesent ac massa at ligula laoureet iaculis. Cras risus
                            ipsum, faucibus ut, ullamcorper id, varius ac, leo.</p>
                    </div>
                    <!-- Single about text End -->
                </div>
            </div>
        </div>
    </div>

    <!--== FunFact Area Start ==-->
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
                            <h5 class="funfact-count">4025</h5>
                            <p>Members</p>
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
                            <h5 class="funfact-count">8725</h5>
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
                            <h5><span class="funfact-count">231</span>+</h5>
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
                            <h5><span class="funfact-count">32</span>+</h5>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
                <!--== Single FunFact End ==-->
            </div>
        </div>
    </section>
    <!--== FunFact Area End ==-->



    <div class="people-to-say section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-page-area-title">
                        <h2>Some Speech About Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="people-to-say-wrapper owl-carousel">
                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="{{asset('frontend/assets/img/testimonial/vc.jpg')}}" alt="Alumni" class="img-fluid" />
                            </div>
                            <i class="quote-icon"></i>
                            <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                inciidunt ut
                                labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                            <h4>Major General Md Mahbub-ul Alam<span class="people-deg">ndc, afwc, psc, Mphil, PhD</span><span class="people-deg">Vice Chancellor</span></h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="{{asset('frontend/assets/img/testimonial/dean.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <i class="quote-icon"></i>
                            <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                inciidunt ut
                                labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                            <h4>Brig Gen Mohammed Monir Hossain Patwary<span class="people-deg">    psc, Dean - FBS</span></h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="{{asset('frontend/assets/img/testimonial/avatar.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <i class="quote-icon"></i>
                            <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                inciidunt ut
                                labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                            <h4>Major Masudur Rashid<span class="people-deg">ndc, Deputy Director Alumni</span></h4>
                        </div>
                        <!-- Single People Testimonial -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Committee Page Content End ==-->
@endsection
