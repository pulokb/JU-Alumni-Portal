@extends('layouts.admin')
@section('title','Admin Dashboard')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-wallet icon-gradient bg-plum-plate">
                    </i>
                </div>
                <div>Dashboard

                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="divider mt-0" style="margin-bottom: 30px;"></div>
        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.users.requests')}}">
                <div class="card mb-3 widget-content bg-night-fade">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading"><span style="color: black">Request Students</span></div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>{{$requestUsers}}</span></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.jobDetails.requests')}}">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading"><span style="color: black">Request Jobs</span></div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>{{$requestJobs}}</span></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.blogs.requests')}}">
                <div class="card mb-3 widget-content bg-premium-dark">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Request Blog</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning"><span>{{$requestBlogs}}</span></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <div class="">
        <div class="divider mt-0" style="margin-bottom: 30px;"></div>
        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.users.index')}}">
                <div class="card mb-3 widget-content bg-night-fade">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading"><span style="color: black">Total Students</span></div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>{{$users}}</span></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.jobDetails.index')}}">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading"><span style="color: black">Total Jobs</span></div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$jobs}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-4">
                <a href="{{route('admin.seminars.index')}}">
                    <div class="card mb-3 widget-content bg-premium-dark">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Seminar</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>{{$seminars}}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection