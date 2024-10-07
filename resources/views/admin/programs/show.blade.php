@extends('layouts.admin')
@section('title','View')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">View {{$program->category}} </h5><br>
            </div>
            <div class="card-body">
            <form data-parsley-validate enctype="multipart/form-data" action="#" class="" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Title</label>
                    <input disabled autofocus value="{{$program->title}}" required name="title"
                        style="background: #f5f6fa" type="text" class="form-control is-valid" placeholder="">
                </div>
                <div class="form-group">
                    <label>Details</label>
                    <div rows="15" required style="background: #f5f6fa" name="" class="form-control"
                        placeholder="Enter Email">{!!$program->details!!}</div>
                </div>
                <div class="form-group">
                    <label>Image</label><br>
                    <img src="{{asset('images/'.$program->image)}}" alt=""> <br>
                </div>
                <div class="form-footer pt-4 pt-2 mt-4 border-top">

                </div>
            </form>
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