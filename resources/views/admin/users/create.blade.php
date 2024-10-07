@extends('layouts.admin')
@section('title','Create Student Profile')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Create Student Profile</h5><br>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" class=""
                    action="{{route('admin.users.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name*</label>
                        <input required type="text" value="{{old('name')}}" name="name" class="form-control"
                            laceholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Email address*</label>
                        <input value="{{old('email')}}" name="email" required type="email" class="form-control"
                            laceholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label>Password*</label>
                        <input value="{{old('name')}}" required name="password" minlength="8" type="password" class="form-control"
                            laceholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password*</label>
                        <input value="{{old('name')}}" required name="password_confirmation" minlength="8" type="password" class="form-control"
                            laceholder="ConfirmPassword">
                    </div>


                    <div class="form-group">
                        <label>Department*</label>
                        <select name="department" class="form-control">
                            <option value="ICT">ICT</option>
                            <option value="ES">ES</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Faculty*</label>
                        <select name="faculty" class="form-control">
                            <option value="FST">FST</option>
                            <option value="FBS">FBS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Batch*</label>
                        <input value="{{old('batch')}}" required name="batch"type="text" class="form-control"
                            laceholder="Batch">
                    </div>
                    <div class="form-group">
                        <label>Student Id*</label>
                        <input value="{{old('student_id')}}" required name="student_id"type="number" class="form-control"
                            laceholder="Student Id">
                    </div>
                    <div class="form-group">
                        <label>Phone*</label>
                        <input value="{{old('phone')}}" required name="phone"type="text" class="form-control"
                            laceholder="Phone">
                    </div>
                    <div class="form-group">
                        <label>Address*</label>
                        <input value="{{old('address')}}" required name="address" type="text" class="form-control" laceholder="Address">
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input value="{{old('facebook')}}" name="facebook" type="url" class="form-control"
                            placeholder="http://facebook.com">
                    </div>
                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input value="{{old('linkedin')}}" name="linkedin" type="url" class="form-control"
                            placeholder="http://linkedin.com">
                    </div>
                    <div class="form-group">
                        <label>Job Type*</label>
                        <select name="job_type" class="form-control">
                            <option value="Student">Student</option>
                            <option value="Business">Business</option>
                            <option value="Private Job">Private Job</option>
                            <option value="Govt. Job">Govt. Job</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Job Details*</label>
                    <textarea required name="job_details" type="text" class="form-control" laceholder="Job Details">{{old('job_details')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Student Type*</label>
                        <select name="student_type" class="form-control">
                            <option value="Current Student">Current Student</option>
                            <option value="Alumni">Alumni</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>CV</label>
                        <input value="" name="file" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image*</label>
                        <input value="" required name="image" type="file" class="form-control">
                    </div>

                    <div class="form-footer pt-4 pt-2 mt-4 border-top">
                        <button type="submit" class="btn btn-primary">
                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection