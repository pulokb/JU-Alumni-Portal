@extends('layouts.frontend')
@section('title','Profile')
@section('content')
@include('includes.banner',['title'=>'Profile','details'=>'This is a page. This is a demo paragraph.This is
a demo
senten.'])
<link rel="stylesheet" href="{{asset('frontend/assets/css/style.min.css')}}">
<section id="page-content-wrap">
    <div class="register-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-page-inner">
                        <div class="col-lg-10 m-auto">
                            <div class="register-form-content">
                                <div class="row">
                                    <!-- Regsiter Form Area Start -->
                                    <div class="col-lg-12 col-md-12 ml-auto">
                                        <div class="register-form-wrap">
                                            <h3>Your Profile</h3>
                                            <div class="register-form">
                                                <form data-parsley-validate enctype="multipart/form-data" class=""
                                                    action="{{route('user.profile.change')}}" method="POST">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input required type="text" value="{{$user->name}}" name="name"
                                                            class="form-control" placeholder="Enter Name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email address*</label>
                                                        <input disabled value="{{$user->email}}" name="email" required
                                                            type="email" class="form-control" placeholder="Enter Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Department*</label><br>
                                                        <select name="department" class="">
                                                            <option value="{{$user->profile->department}}">
                                                                {{$user->profile->department}}</option>
                                                            <option value="ICT">ICT</option>
                                                            <option value="ES">ES</option>
                                                        </select>
                                                        <br>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Faculty*</label><br>
                                                        <select name="faculty" class="">
                                                            <option value="{{$user->profile->faculty}}">
                                                                {{$user->profile->faculty}}</option>
                                                            <option value="FST">FST</option>
                                                            <option value="FBS">FBS</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <br>
                                                        <label><br>Batch*</label>
                                                        <input value="{{$user->profile->batch}}" required name="batch"
                                                            type="text" class="form-control" laceholder="Batch">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Student Id*</label>
                                                        <input value="{{$user->profile->student_id}}" required
                                                            name="student_id" type="number" class="form-control"
                                                            laceholder="Student Id">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone*</label>
                                                        <input value="{{$user->profile->phone}}" required name="phone"
                                                            type="text" class="form-control" laceholder="Phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address*</label>
                                                        <input value="{{$user->profile->address}}" required
                                                            name="address" type="text" class="form-control"
                                                            laceholder="Address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input value="{{$user->profile->facebook}}" name="facebook"
                                                            type="url" class="form-control"
                                                            placeholder="http://facebook.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>LinkedIn</label>
                                                        <input value="{{$user->profile->linkedin}}" name="linkedin"
                                                            type="url" class="form-control"
                                                            placeholder="http://linkedin.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Job Type*</label><br>
                                                        <select name="job_type" class="form-control">
                                                            <option value="{{$user->profile->job_type}}">
                                                                {{$user->profile->job_type}}</option>
                                                            <option value="Student">Student</option>
                                                            <option value="Business">Business</option>
                                                            <option value="Private Job">Private Job</option>
                                                            <option value="Govt. Job">Govt. Job</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="form-group">
                                                        <label><br>Job Details*</label>
                                                        <textarea required name="job_details" type="text"
                                                            class="form-control"
                                                            laceholder="Job Details">{{$user->profile->job_details}}</textarea>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Student Type*<br></label><br>
                                                        <select name="student_type" class="form-control">
                                                            <option value="{{$user->profile->student_type}}">
                                                                {{$user->profile->student_type}}</option>
                                                            <option value="Current Student">Current Student</option>
                                                            <option value="Alumni">Alumni</option>
                                                        </select>
                                                    </div>
                                                    <br>

                                                    <div class="form-group file-input">
                                                        <img src="{{asset('images/'.$user->profile->image)}}"
                                                            alt="No Image Found"><br>
                                                        <input type="file" name="image" id="customfile1"
                                                            class="d-none" />
                                                        <label class="custom-file" for="customfile1"><i
                                                                class="fa fa-upload"></i>Upload Your Photo</label>
                                                    </div>
                                                    @if ($user->profile->file)<br>
                                                    <a download href="{{asset('files/'.$user->profile->file)}}">Download
                                                        Your CV</a>
                                                    @else
                                                    <p>No File Found</p>
                                                    @endif
                                                    <div class="form-group file-input">
                                                        <input type="file" name="file" id="customfile" class="d-none" />
                                                        <label class="custom-file" for="customfile"><i
                                                                class="fa fa-upload"></i>Upload Your recent CV</label>
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <label>CV</label>
                                                        <input value="" name="file" type="file" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Image*</label>
                                                        <input value="" required name="image" type="file"
                                                            class="form-control">
                                                    </div> --}}

                                                    <div class="form-footer pt-4 pt-2 mt-4 border-top">
                                                        <button type="submit" class="btn btn-reg">
                                                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Update
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Regsiter Form Area End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
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
                            <div class="col-lg-3">
                                <a href="{{route('user.activities.create')}}" class="btn btn-brand about-btn ">Create
                                    Activities</a>
                            </div>
                        </div><br>
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
                                    <a href="{{route('user.activities.edit',$activity->id)}}"
                                        class="btn btn-lg btn-success">Edit</a>
                                    <a class="btn btn-lg btn-danger" href="#"
                                        onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$activity->id}}').submit();}else{event.preventDefault()}">
                                        Delete</a>
                                    <form id="delete-form-{{$activity->id}}"
                                        action="{{ route('user.activities.destroy',$activity->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="educational" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="{{route('user.trainings.create')}}" class="btn btn-brand about-btn ">Create
                                    Training</a>
                            </div>
                        </div><br>
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
                                    <a href="{{route('user.trainings.edit',$training->id)}}"
                                        class="btn btn-lg btn-success">Edit</a>
                                    <a class="btn btn-lg btn-danger" href="#"
                                        onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$training->id}}').submit();}else{event.preventDefault()}">
                                        Delete</a>
                                    <form id="delete-form-{{$training->id}}"
                                        action="{{ route('user.trainings.destroy',$training->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="achievements" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="{{route('user.clubs.create')}}" class="btn btn-brand about-btn ">Create
                                    Club</a>
                            </div>
                        </div><br>
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
                                    <a href="{{route('user.clubs.edit',$club->id)}}"
                                        class="btn btn-lg btn-success">Edit</a>
                                    <a class="btn btn-lg btn-danger" href="#"
                                        onclick="if (confirm('Are you sure to delete?')){document.getElementById('delete-form-{{$club->id}}').submit();}else{event.preventDefault()}">
                                        Delete</a>
                                    <form id="delete-form-{{$club->id}}"
                                        action="{{ route('user.clubs.destroy',$club->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection