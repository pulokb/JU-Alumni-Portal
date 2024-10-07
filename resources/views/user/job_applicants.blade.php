@extends('layouts.frontend')
@section('title','Applicants')
@section('content')
@include('includes.banner',['title'=>'Applicants','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])
<section id="blog-area" class="section-padding">
    <div class="container">
        @if(count($requireters)>0)
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        <h5 class="card-title text-primary">Requrited Applicant </h5><br>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Cover Letter</th>
                                        <th>CV</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requireters as $requireter)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$requireter->user->name}}</td>
                                        <td>{{$requireter->user->email}}</td>
                                        <td>{{$requireter->cover_letter}}</td>
                                        <td>@if ($requireter->file)
                                            <a href="{{asset('files/'.$requireter->file)}}">Download</a></td>
                                        @else
                                        No File Found
                                        @endif
                                        <td>
                                            <a class='btn btn-primary'
                                                href='{{route('student.profile',$requireter->user->id)}}'>
                                                View Profile
                                            </a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        <h5 class="card-title text-primary">All Applicants </h5><br>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-hover table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Cover Letter</th>
                                        <th>CV</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userJobs as $userJob)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$userJob->user->name}}</td>
                                        <td>{{$userJob->user->email}}</td>
                                        <td>{{$userJob->cover_letter}}</td>
                                        <td>@if ($userJob->file)
                                            <a href="{{asset('files/'.$userJob->file)}}">Download</a></td>
                                        @else
                                        No File Found
                                        @endif
                                        <td>
                                            <a class='btn btn-primary'
                                                href='{{route('student.profile',$userJob->user->id)}}'>
                                                View Profile
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection