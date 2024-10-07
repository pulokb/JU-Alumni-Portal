@extends('layouts.frontend')
@section('title','Update Club')
@section('content')
@include('includes.banner',['title'=>'Update Club','details'=>'This is a page. This is a demo paragraph.This is
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
                                            <h3>Update Club Details</h3>
                                            <div class="register-form">
                                                <form data-parsley-validate enctype="multipart/form-data" class=""
                                                    action="{{route('user.clubs.update',$club->id)}}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group">
                                                        <label>Club Name*</label>
                                                        <input value="{{$club->name}}" required name="name" type="text"
                                                            class="form-control" laceholder="Club Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label><br>Club Details*</label>
                                                        <textarea required rows="5" name="details" type="text"
                                                            class="form-control"
                                                            laceholder="Club Details">{{$club->details}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Designation*</label>
                                                        <input value="{{$club->designation}}" required
                                                            name="designation" type="text" class="form-control"
                                                            laceholder="Club Designation">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Member Since*</label>
                                                        <input value="{{$club->member_since}}" required
                                                            name="member_since" type="date" class="form-control"
                                                            laceholder="Club Designation">
                                                    </div>

                                                    <div class="form-group file-input">
                                                        @if($club->file)
                                                        <a download="" href="{{asset('files/'.$club->file)}}">Download
                                                            File</a><br><br>
                                                        @endif
                                                        <input type="file" name="file" id="customfile" class="d-none" />
                                                        <label class="custom-file" for="customfile"><i
                                                                class="fa fa-upload"></i>Upload File</label>
                                                    </div>
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