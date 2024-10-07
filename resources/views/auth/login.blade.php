@extends('layouts.frontend')
@section('title','Login')
@section('content')
@include('includes.banner',['title'=>'Login','details'=>'This is a page. This is a demo paragraph.This is a demo
senten.'])

<!--== Register Page Content Start ==-->
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
                                                    <h4>Login Here</h4>
                                                    <div class="sign-form">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            @csrf
                                                            <input value="{{ old('email') }}" required name="email"
                                                                type="email" placeholder="Enter your Email">
                                                            <input required name="password" type="password"
                                                                placeholder="Password">
                                                            <button type="submit" class="btn btn-reg">Login</button>
                                                        </form>
                                                    </div>
                                                    <br>
                                                </div>
                                                Don't have any account? <a href="{{ route('register') }}">
                                                    Register Here<br> </a>
                                                @if (Route::has('password.request'))
                                                <a class="" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
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