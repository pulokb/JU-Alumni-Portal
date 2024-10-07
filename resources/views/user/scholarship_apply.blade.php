@extends('layouts.frontend')
@section('title','Scholarship Apply')
@section('content')
@include('includes.banner',['title'=>'Scholarship Apply','details'=>'This is a page. This is a demo paragraph.This is
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
                                            <h3> Scholarship Apply </h3>
                                            <h6>{{$scholarship->title}}</h6><br>
                                            <div class="register-form">
                                                <form data-parsley-validate enctype="multipart/form-data" class=""
                                                    action="{{route('user.scholarship.apply',$scholarship->id)}}" method="POST">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label>Father Occupation*</label>
                                                        <input required type="text" value="{{old('father_occupation')}}" name="father_occupation"
                                                            class="form-control" placeholde="Enter ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Father Income*</label>
                                                        <input required type="number" value="{{old('father_income')}}" name="father_income"
                                                            class="form-control" placeholde="Enter ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mother Occupation*</label>
                                                        <input required type="text" value="{{old('mother_occupation')}}" name="mother_occupation"
                                                            class="form-control" placeholde="Enter ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mother Income*</label>
                                                        <input required type="number" value="{{old('mother_income')}}" name="mother_income"
                                                            class="form-control" placeholde="Enter ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Number of Siblings*</label>
                                                        <input required type="number" value="{{old('siblings')}}" name="siblings"
                                                            class="form-control" placeholde="Enter siblings">
                                                    </div>

                                                   
                                                    <br>
                                                    <div class="form-group">
                                                        <label><br>Reason For scholarship*</label>
                                                        <textarea required rows="5" name="reasons" type="text"
                                                            class="form-control"
                                                            laceholder="Job Details">{{old('reasons')}}</textarea>
                                                    </div>
                                                   
                                                    <div class="form-footer pt-4 pt-2 mt-4 border-top">
                                                        <button type="submit" class="btn btn-reg">
                                                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Apply
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