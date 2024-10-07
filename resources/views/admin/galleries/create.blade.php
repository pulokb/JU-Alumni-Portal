@extends('layouts.admin')
@section('title','Create New gallery')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Create New gallery </h5><br>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.galleries.store')}}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Category*</label>
                        <select name="category" class="form-control" id="">
                            <option value="Gallery">Gallery</option>
                            <option value="Slider">Slider</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Image*</label>
                        <input  required name="image" style="background: #f5f6fa" type="file"
                            class="form-control ">
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

@section('script')
<script>
    // CKEDITOR.replace( 'details' );
        CKEDITOR.replace( 'editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image.upload', ['_token' => csrf_token()])}}",
            filebrowserUploadMethod: 'form'
        });
</script>
@endsection