@extends('layouts.admin')
@section('title','View Admin')
@section('content')<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <h5 class="card-title text-primary">View Admin </h5><br>
            </div>
            <div class="card-body">
                <form id="add-account" class="form-group" action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input disabled value="{{$admin->name}}" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input disabled value="{{$admin->email}}" type="email" class="form-control" name="email">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection