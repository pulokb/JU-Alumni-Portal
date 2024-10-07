@extends('layouts.frontend')
@section('title','Dashboard')
@section('content')
@include('includes.banner',['title'=>'Dashboard','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])
<link rel="stylesheet" href="{{asset('my_files/mycss_index.css')}}">
<br>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="{{route('user.jobs.index')}}">
            <div class="card-counter primary">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers">{{$jobs}}</span>
                <span class="count-name">Jobs</span>
            </div>
        </a>
        </div>

        <div class="col-md-4"><a href="{{route('user.blogs.index')}}">
            <div class="card-counter danger">
                <i class="fa fa-ticket"></i>
                <span class="count-numbers">{{$blogs}}</span>
                <span class="count-name">Blogs</span>
            </div>
            </a>
        </div>

        <div class="col-md-4"><a href="{{route('user.zooms.index')}}">
            <div class="card-counter success">
                <i class="fa fa-database"></i>
                <span class="count-numbers">{{$zooms}}</span>
                <span class="count-name">Meeting</span>
            </div>
            </a>
        </div>

    </div>
</div>
<br>
@endsection
