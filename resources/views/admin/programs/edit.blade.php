@extends('layouts.admin')
@section('title','Edit')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Edit {{$program->category}} </h5><br>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data"
                    action="{{route('admin.programs.update',$program->id)}}" class="" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Title</label>
                        <input autofocus value="{{$program->title}}" required name="title" style="background: #f5f6fa"
                            type="text" class="form-control is-valid" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Details</label>
                        <textarea rows="15" required style="background: #f5f6fa" name="details" class="form-control"
                            placeholder="Enter Email">{!!$program->details!!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label><br>
                        <img src="{{asset('images/'.$program->image)}}" alt=""> <br>
                        <input name="image" style="background: #f5f6fa" type="file" class="form-control is-valid">
                    </div>
                    <div class="form-footer pt-4 pt-2 mt-4 border-top">
                        <button type="submit" class="mb-1 btn btn-success">
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
        CKEDITOR.replace( 'details', {
            filebrowserUploadUrl: "{{route('ckeditor.image.upload', ['_token' => csrf_token()])}}",
            filebrowserUploadMethod: 'form'
        });
</script>
@endsection