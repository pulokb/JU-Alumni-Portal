@extends('layouts.frontend')
@section('title','Create Profile')
@section('content')
@include('includes.banner',['title'=>'Create Profile','details'=>'This is a page. This is a demo paragraph.This is
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
                                <div class="row">
                                    <!-- Regsiter Form Area Start -->
                                    <div class="col-lg-12 col-md-12 ml-auto">
                                        <div class="register-form-wrap">
                                            <h3>Create Your Profile</h3>
                                            <div class="register-form">
                                                {{-- <form action="">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_email">Email</label>
                                                                <input type="email" class="form-control"
                                                                    id="register_email" name="register_email" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_password">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="register_password" name="register_password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_name">Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_name" name="register_name" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_stuid">Student ID</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_stuid" name="register_stuid" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_year">Passing Year</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_year" name="register_year" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_deptno">Phone Number</label>
                                                                <input type="number" class="form-control"
                                                                    id="register_deptno" name="register_deptno" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_year">Faculty</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_year" name="register_year" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_deptno">Department</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_deptno" name="register_deptno" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_year">Facebook Profile Link</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_year" name="register_year" />
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="register_deptno">Linkedin Profile
                                                                    Link</label>
                                                                <input type="text" class="form-control"
                                                                    id="register_deptno" name="register_deptno" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group file-input">
                                                        <input type="file" name="register_file" id="customfile"
                                                            class="d-none" />
                                                        <label class="custom-file" for="customfile"><i
                                                                class="fa fa-upload"></i>Upload Your Photo</label>
                                                    </div>
                                                    <div class="form-group file-input">
                                                        <input type="file" name="register_file" id="customfile"
                                                            class="d-none" />
                                                        <label class="custom-file" for="customfile"><i
                                                                class="fa fa-upload"></i>Upload Your recent CV</label>
                                                    </div>

                                                    <div class="gender form-group">
                                                        <label class="g-name d-block">Gender</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="register_gender_male"
                                                                name="register_gender" value="mail"
                                                                class="custom-control-input" />
                                                            <label class="custom-control-label"
                                                                for="register_gender_male">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="register_gender_female"
                                                                name="register_gender" value="female"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="register_gender_female">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox float-lg-right">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1"> I
                                                                have read and agree to the <a href="#">Alumni</a> Terms
                                                                of Service</label>
                                                        </div>
                                                        <input type="submit" class="btn btn-reg" value="Registration">
                                                    </div>
                                                </form> --}}
                                                <form data-parsley-validate enctype="multipart/form-data" class=""
                                                    action="{{route('user.profiles.store')}}" method="POST">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label>Department*</label><br>
                                                        <select name="department" class="">
                                                            <option value="ICT">ICT</option>
                                                            <option value="ES">ES</option>
                                                        </select>
                                                        <br>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Faculty*</label><br>
                                                        <select name="faculty" class="">
                                                            <option value="FST">FST</option>
                                                            <option value="FBS">FBS</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <br>
                                                        <label><br>Batch*</label>
                                                        <input value="{{old('batch')}}" required name="batch"
                                                            type="text" class="form-control" laceholder="Batch">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Student Id*</label>
                                                        <input value="{{old('student_id')}}" required name="student_id"
                                                            type="number" class="form-control" laceholder="Student Id">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone*</label>
                                                        <input value="{{old('phone')}}" required name="phone"
                                                            type="text" class="form-control" laceholder="Phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address*</label>
                                                        <input value="{{old('address')}}" required name="address"
                                                            type="text" class="form-control" laceholder="Address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input value="{{old('facebook')}}" name="facebook" type="url"
                                                            class="form-control" placeholder="http://facebook.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>LinkedIn</label>
                                                        <input value="{{old('linkedin')}}" name="linkedin" type="url"
                                                            class="form-control" placeholder="http://linkedin.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Job Type*</label><br>
                                                        <select name="job_type" class="form-control">
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
                                                            laceholder="Job Details">{{old('job_details')}}</textarea>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Student Type*<br></label><br>
                                                        <select name="student_type" class="form-control">
                                                            <option value="Current Student">Current Student</option>
                                                            <option value="Alumni">Alumni</option>
                                                        </select>
                                                    </div>
                                                    <br>

                                                    <div class="form-group file-input">
                                                        <input type="file" name="image" id="customfile" class="d-none" />
                                                        <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                    </div>
                                                    <div class="form-group file-input">
                                                        <input type="file" name="file" id="customfile" class="d-none" />
                                                        <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your recent CV</label>
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
                                                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Submit
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
    </div>
</section>
@endsection