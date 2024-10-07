@extends('layouts.admin')
@section('title','Show gallery')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">Show gallery </h5><br>
            </div>
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Category</label>
                        <input disabled type="text" value="{{$gallery->category}}" name="name" class="form-control"
                            placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <img src="{{asset('images/'.$gallery->image)}}" alt="" srcset="">
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