@extends('layouts.frontend')
@section('title','Update Blog')
@section('content')
@include('includes.banner',['title'=>'Update Blog','details'=>'This is a page. This is a demo paragraph.This is
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
                                            <h3>Update Blog</h3>
                                            <div class="register-form">
                                                <form data-parsley-validate enctype="multipart/form-data" class=""
                                                    action="{{route('user.blogs.update',$blog->id)}}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group">
                                                        <label>Title*</label>
                                                        <input value="{{$blog->title}}" required name="title"
                                                            type="text" class="form-control" laceholder="Blog Title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label><br>Blog Details*</label>
                                                        <textarea required rows="5" name="details" type="text"
                                                            class="form-control"
                                                            laceholder="Blog Details">{{$blog->details}}</textarea>
                                                    </div>
                                                    <img height="200px" width="200px"
                                                        src="{{asset('images/'.$blog->image)}}" />
                                                    <div class="form-group file-input">
                                                        <input type="file" name="image" id="customfile"
                                                            class="d-none" />
                                                        <label class="custom-file" for="customfile"><i
                                                                class="fa fa-upload"></i>Upload Image*</label>
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
@include('includes.ckeditor')