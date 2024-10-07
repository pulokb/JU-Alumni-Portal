@extends('layouts.admin')
@section('title','View Student Profile')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">

                <h5 class="card-title text-primary">View Student Profile </h5><br>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="#" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Name</label>
                        <input disabled required type="text" value="{{$user->name}}" name="name" class="form-control"
                            placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input disabled value="{{$user->email}}" name="email" required type="email" class="form-control"
                            placeholder="Enter Email">
                    </div>

                    @if($user->profile)
                    <div class="form-group">
                        <label>Department</label>
                        <select disabled name="department" class="form-control">
                            <option value="{{$user->profile->department}}">{{$user->profile->department}}</option>
                            <option value="ICT">ICT</option>
                            <option value="ES">ES</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Faculty</label>
                        <select disabled name="faculty" class="form-control">
                            <option value="{{$user->profile->faculty}}">{{$user->profile->faculty}}</option>
                            <option value="FST">FST</option>
                            <option value="FBS">FBS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Batch</label>
                        <input disabled value="{{$user->profile->batch}}" required name="batch" type="text"
                            class="form-control" laceholder="Batch">
                    </div>
                    <div class="form-group">
                        <label>Student Id</label>
                        <input disabled value="{{$user->profile->student_id}}" required name="student_id" type="number"
                            class="form-control" laceholder="Student Id">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input disabled value="{{$user->profile->phone}}" required name="phone" type="text"
                            class="form-control" laceholder="Phone">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input disabled value="{{$user->profile->address}}" required name="address" type="text"
                            class="form-control" laceholder="Address">
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input disabled value="{{$user->profile->facebook}}" name="facebook" type="url"
                            class="form-control" laceholder="http://facebook.com">
                    </div>
                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input disabled value="{{$user->profile->linkedin}}" name="linkedin" type="url"
                            class="form-control" laceholder="http://linkedin.com">
                    </div>
                    <div class="form-group">
                        <label>Job Type</label>
                        <select disabled name="job_type" class="form-control">
                            <option value="{{$user->profile->job_type}}">{{$user->profile->job_type}}</option>
                            <option value="Student">Student</option>
                            <option value="Business">Business</option>
                            <option value="Private Job">Private Job</option>
                            <option value="Govt. Job">Govt. Job</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Job Details</label>
                        <textarea disabled required name="job_details" type="text" class="form-control"
                            laceholder="Job Details">{{$user->profile->job_details}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Student Type</label>
                        <select disabled name="student_type" class="form-control">
                            <option value="{{$user->profile->student_type}}">{{$user->profile->student_type}}</option>
                            <option value="Current Student">Current Student</option>
                            <option value="Alumni">Alumni</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>CV</label>
                        @if ($user->profile->file)<br>
                        <a download href="{{asset('files/'.$user->profile->file)}}">Download</a>
                        @else
                        <p>No File Found</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Image</label><br>
                        <img src="{{asset('images/'.$user->profile->image)}}" alt="No Image Found"><br>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection