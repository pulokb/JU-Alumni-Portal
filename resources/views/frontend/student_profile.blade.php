@extends('layouts.frontend')
@section('title','Student Profile')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.min.css')}}"> --}}
<link rel="stylesheet" href="{{asset('frontend/assets/css/style.min.css')}}">
<section class="teacher-details">
    <div class="container">
        <div class="row teachers-row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-8 teachers-col">
                <div class="single-teacher-details mt-50 text-center">

                    <div class="teacher-image">
                        <a href="teacher-details.html">
                            <img src="{{asset('images/'.$user->profile->image)}}" alt="teacher">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 teachers-col">
                <div class="teacher-details-content mt-45">
                    <h4 class="teacher-name">{{$user->name}}</h4>
                    <span class="designation">{{$user->profile->student_type}}</span>
                    <br>
                    <span class="department">{{$user->profile->department}}</span>
                    <br>
                    <span class="department">{{$user->profile->faculty}}</span>
                    <span class="department">{{$user->profile->job_type}}</span>
                    <p>E{{$user->profile->job_details}}</p>
                    <ul class="teacher-contact">
                        <li><strong>Email:</strong> {{$user->email}}</li>
                        <li><strong>Phone:</strong> {{$user->profile->phone}}</li>
                        <li><strong>Student ID:</strong> {{$user->profile->student_id}}</li>
                        @if ($user->profile->file)<br>
                        <li><strong>CV:</strong>
                            <a download href="{{asset('files/'.$user->profile->file)}}">Download
                                CV</a>
                        </li>
                        @endif
                    </ul>
                </div>

            </div>


        </div>
        <br>
        <br>
        <center>
            <form action="#">

                <a class="main-btn main-btn-2" href="{{$user->profile->facebook}}">Facebook</a>
                <a class="main-btn main-btn-2" href="{{$user->profile->linkedin}}">LinkedIn</a>
                {{-- <a href="#"><button class="main-btn main-btn-2">Text me</button></a> --}}

            </form>

        </center>







        <div class="teacher-details-tab">
            <ul class="nav nav-justified" role="tablist">
                <li class="nav-item"><a class="active" data-toggle="tab" href="#experience" role="tab">Activity</a>
                </li>
                <li class="nav-item"><a data-toggle="tab" href="#educational" role="tab">Training</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#achievements " role="tab">Club </a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="experience" role="tabpanel">

                    <div class="row">
                        @foreach ($activities as $activity)
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">{{$activity->title}}</h4>
                                <p>{{$activity->details}}</p>
                                <p>@if($activity->file)
                                    <a download="" href="{{asset('files/'.$activity->file)}}">Download
                                        File</a><br><br>
                                    @endif</p><br>
                                {{-- <a href="{{route('user.activities.edit',$activity->id)}}"
                                    class="btn btn-lg btn-success">Edit</a>
                                <a class="btn btn-lg btn-danger" href="#"
                                    onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$activity->id}}').submit();}else{event.preventDefault()}">
                                    Delete</a>
                                <form id="delete-form-{{$activity->id}}"
                                    action="{{ route('user.activities.destroy',$activity->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form> --}}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="tab-pane fade" id="educational" role="tabpanel">

                    <div class="row">
                        @foreach ($trainings as $training)
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">{{$training->institute}}</h4>
                                <p>Subject : {{$training->subject}}</p>
                                <p>{{$training->details}}</p>
                                <p>From : {{date('d-M-Y',strtotime($training->from))}} &nbsp;&nbsp; To :
                                    {{date('d-M-Y',strtotime($training->to))}}</p>
                                @if($training->file)
                                <a download="" href="{{asset('files/'.$training->file)}}">Download File</a>
                                @endif
                                <br>
                                {{-- <a href="{{route('user.trainings.edit',$training->id)}}"
                                    class="btn btn-lg btn-success">Edit</a>
                                <a class="btn btn-lg btn-danger" href="#"
                                    onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$training->id}}').submit();}else{event.preventDefault()}">
                                    Delete</a>
                                <form id="delete-form-{{$training->id}}"
                                    action="{{ route('user.trainings.destroy',$training->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form> --}}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="tab-pane fade" id="achievements" role="tabpanel">

                    <div class="row">
                        @foreach ($clubs as $club)
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-content-tab">
                                <h4 class="title">{{$club->name}}</h4>
                                <p>{{$club->details}}</p>
                                <p>Designation : {{$club->designation}}</p>
                                <p>Member Since : {{date('d-M-Y',strtotime($club->member_since))}}</p>
                                @if($club->file)
                                <a download="" href="{{asset('files/'.$club->file)}}">Download File</a>
                                @endif<br>
                                {{-- <a href="{{route('user.clubs.edit',$club->id)}}" class="btn btn-lg btn-success">Edit</a>
                                <a class="btn btn-lg btn-danger" href="#"
                                    onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$club->id}}').submit();}else{event.preventDefault()}">
                                    Delete</a>
                                <form id="delete-form-{{$club->id}}"
                                    action="{{ route('user.clubs.destroy',$club->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form> --}}
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
@endsection