@extends('layouts.frontend')
@section('title','Register')
@section('content')
@include('includes.banner',['title'=>'Register','details'=>'This is a page. This is a demo paragraph.This is a demo
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
                                                    <h4>Register Here</h4>
                                                    <div class="sign-form">
                                                        <form method="POST" action="{{ route('register') }}">
                                                            @csrf
                                                            <input value="{{ old('name') }}" required name="name"
                                                                type="text" placeholder="Enter your Name">
                                                            <input value="{{ old('email') }}" required name="email"
                                                                type="email" placeholder="Enter your Email">
                                                            <input required minlength="8" name="password"
                                                                type="password" placeholder="Password">
                                                            <input required name="password_confirmation" minlength="8"
                                                                type="password" placeholder="Confirm Password">
                                                            <button type="submit" class="btn btn-reg">Register</button>
                                                        </form>
                                                    </div>
                                                    <br>
                                                </div>
                                                Already a Member? <a href="{{ route('login') }}">
                                                    Login Here<br> </a>
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
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Register here
                </div>
                <div class="card-body">
                    <form data-parsley-validate enctype="multipart/form-data" action="{{route('register')}}"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name*</label>
                            <input maxlength="191" autofocus required type="text" value="{{old('name')}}" name="name"
                                class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>About </label>
                            <textarea maxlength="65535" type="text" name="about" class="form-control"
                                placeholder="About yourself"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Email address*</label>
                            <input maxlength="191" value="{{old('email')}}" name="email" required type="email"
                                class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input value="{{old('phone')}}" name="phone" type="text" class="form-control"
                                placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input maxlength="191" value="{{old('address')}}" name="address" type="text"
                                class="form-control" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label>Password*</label>
                            <input required name="password" minlength="8" type="password" class="form-control"
                                placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password*</label>
                            <input required name="password_confirmation" minlength="8" type="password"
                                class="form-control" placeholder="ConfirmPassword">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control" accept="image/*">
                        </div>
                        <div class="form-footer pt-4 pt-2 mt-4 border-top">
                            <button type="submit" class="mb-1 btn btn-success">
                                <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Register
                            </button>
                            <div class="pull-right">
                                Already have an account? <a href="{{route('login')}}">Login here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection