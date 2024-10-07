@extends('layouts.frontend')
@section('title','Create Zoom Meeting')
@section('content')
@include('includes.banner',['title'=>'Create Zoom Meeting','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])
<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="row justify-content-center">
                                    <!-- Signin Area Content Start -->
                                    <div class="col-lg-6 col-md-6 text-center">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <div class="signin-area-wrap">
                                                    <h4>Create Zoom Meeting Here</h4>
                                                    <div class="sign-form">
                                                        <form method="POST" action="{{ route('user.zooms.store') }}">
                                                            @csrf
                                                            <input value="{{ old('title') }}" required name="title"
                                                                type="text" placeholder="Enter Meeting Title">
                                                                <label for="">Meeting Details</label>
                                                            <textarea name="details" id="" cols="52" rows="5"
                                                        placeholder="">{{old('details')}}</textarea>
                                                                <label for="">Meeting Date and Time</label>
                                                            <input value="{{old('start_time')}}" required name="start_time" type="datetime-local"
                                                                placeholder="Meeting Date">
                                                            <input value="{{old('meeting_password')}}" required name="meeting_password" type="text"
                                                                placeholder="Meeting Password">
                                                            <button type="submit" class="btn btn-reg">Create Zoom
                                                                Meeting</button>
                                                        </form>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Signin Area Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection