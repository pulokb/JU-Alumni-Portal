@extends('layouts.admin')
@section('title','Create')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header ">
                <h5 class="card-title text-primary">Create </h5><br>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.programs.store')}}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Title*</label>
                        <input autofocus value="{{old('title')}}" required name="title" type="text"
                            class="form-control " placeholder="Enter Title...">
                    </div>
                    <div class="form-group">
                        <label>Details*</label>
                        <textarea id="editor" rows="30" required name="details" class="form-control"
                            placeholder="{{$category}} Details">{{old('details')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Image*</label>
                        <input autofocus required name="image" type="file" class="form-control ">
                    </div>
                    <input type="hidden" name="category" value="{{$category}}">
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

@include('includes.ckeditor')